<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanans;
use App\Models\Produks;
use App\Models\ProdukUkurans;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class PesananController extends Controller
{
    // Status enum sesuai migration terbaru
    const STATUS_ANTRIAN = 'antrian';
    const STATUS_DIKEMAS = 'dikemas';
    const STATUS_SIAP_PICKUP = 'siap_pickup';
    const STATUS_SELESAI = 'selesai';
    const STATUS_DIBATALKAN = 'dibatalkan';
    const STATUS_MENUNGGU_PEMBATALAN = 'menunggu_pembatalan';
public function store(Request $request)
{
    $request->validate([
        'items' => 'required|array|min:1',
        'items.*.produks_id' => 'required|exists:produks,id',
        'items.*.jumlah' => 'required|integer|min:1',
        'items.*.ukuran' => 'nullable|string',
        'metode_pembayaran' => 'nullable|string',
        'pesan' => 'nullable|string',
    ]);

    $user = Auth::user();
    if (!$user) {
        return response()->json(['message' => 'User tidak terautentikasi'], 401);
    }

    $pesananData = [];

    DB::beginTransaction();
    try {
        foreach ($request->items as $item) {
            $produk = Produks::findOrFail($item['produks_id']);

            // Cek apakah ukuran tersedia
            if (!empty($item['ukuran'])) {
                $produkUkuran = ProdukUkurans::where('produks_id', $produk->id)
                    ->where('ukuran', $item['ukuran'])
                    ->first();

                if (!$produkUkuran) {
                    DB::rollBack();
                    return response()->json([
                        'message' => "Ukuran '{$item['ukuran']}' tidak tersedia untuk produk '{$produk->nama}'"
                    ], 400);
                }

                // (Optional) Tambahkan validasi stok tersedia di sini jika perlu
            }

            $pesanan = Pesanans::create([
                'users_id' => $user->id,
                'produks_id' => $produk->id,
                'jumlah' => $item['jumlah'],
                'ukuran' => $item['ukuran'] ?? null,
                'total_harga' => $item['jumlah'] * $produk->harga,
                'metode_pembayaran' => $request->metode_pembayaran,
                'pesan' => $request->pesan,
                'status' => self::STATUS_ANTRIAN,
            ]);

            $pesananData[] = $pesanan->load(['user', 'produks']);
        }

        DB::commit();
        return response()->json([
            'message' => 'Pesanan berhasil dibuat',
            'pesanan' => $pesananData
        ], 201);

    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json([
            'message' => 'Gagal membuat pesanan',
            'error' => $e->getMessage()
        ], 500);
    }
}
    public function index()
    {
        $pesanans = Pesanans::with(['produks', 'user'])
            ->where('users_id', Auth::id())
            ->get();

        return response()->json(['success' => true, 'data' => $pesanans]);
    }

    public function adminIndex()
    {
        $pesanans = Pesanans::with(['produks', 'user'])->get();

        return response()->json(['success' => true, 'data' => $pesanans]);
    }

    public function show($id)
    {
        $pesanan = Pesanans::with(['produks', 'user'])->find($id);

        if (!$pesanan) {
            return response()->json(['message' => 'Pesanan tidak ditemukan'], 404);
        }

        return response()->json(['success' => true, 'data' => $pesanan]);
    }

    public function batal($id)
    {
        $pesanan = Pesanans::where('id', $id)->where('users_id', Auth::id())->first();

        if (!$pesanan) {
            return response()->json(['message' => 'Pesanan tidak ditemukan atau bukan milik Anda'], 404);
        }

        if ($pesanan->status !== self::STATUS_ANTRIAN) {
            return response()->json(['message' => 'Pesanan hanya bisa dibatalkan saat masih dalam antrian'], 400);
        }

        $pesanan->status = self::STATUS_MENUNGGU_PEMBATALAN;
        $pesanan->save();

        return response()->json(['message' => 'Permintaan pembatalan diajukan, menunggu konfirmasi admin']);
    }
public function adminBatal($id)
{
    $pesanan = Pesanans::find($id);

    if (!$pesanan) {
        return response()->json(['message' => 'Pesanan tidak ditemukan'], 404);
    }

    if (!in_array($pesanan->status, [
        self::STATUS_ANTRIAN,
        self::STATUS_MENUNGGU_PEMBATALAN,
        self::STATUS_DIKEMAS
    ])) {
        return response()->json(['message' => 'Pesanan tidak bisa dibatalkan pada status ini'], 400);
    }

    $pesanan->status = self::STATUS_DIBATALKAN;
    $pesanan->save();

    return response()->json(['message' => 'Pesanan berhasil dibatalkan oleh admin']);
}

    public function konfirmasiPembatalan(Request $request, $id)
    {
        $request->validate(['action' => 'required|in:approve,reject']);

        $pesanan = Pesanans::find($id);
        if (!$pesanan || $pesanan->status !== self::STATUS_MENUNGGU_PEMBATALAN) {
            return response()->json(['message' => 'Pesanan tidak valid untuk pembatalan'], 400);
        }

        $pesanan->status = $request->action === 'approve' ? self::STATUS_DIBATALKAN : self::STATUS_ANTRIAN;
        $pesanan->save();

        return response()->json(['message' => 'Status pembatalan diperbarui', 'status' => $pesanan->status]);
    }


    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:antrian,dikemas,siap_pickup,selesai,dibatalkan,menunggu_pembatalan',
        ]);

        $pesanan = Pesanans::find($id);
        if (!$pesanan) {
            return response()->json(['message' => 'Pesanan tidak ditemukan'], 404);
        }

        $pesanan->status = $request->status;
        $pesanan->save();

        return response()->json(['message' => 'Status pesanan diperbarui']);
    }

    public function markAsCompleted($id)
    {
        $pesanan = Pesanans::find($id);
        
    if (!$pesanan || !in_array($pesanan->status, [
        self::STATUS_DIKEMAS,
        self::STATUS_ANTRIAN,
        self::STATUS_SIAP_PICKUP,
    ])) {
        return response()->json(['message' => 'Pesanan tidak valid untuk diselesaikan'], 400);
    }

        $produkUkuran = ProdukUkurans::where('produks_id', $pesanan->produks_id)
            ->where('ukuran', $pesanan->ukuran)
            ->first();

        if (!$produkUkuran || $produkUkuran->stok < $pesanan->jumlah) {
            return response()->json(['message' => 'Stok tidak cukup atau ukuran tidak ditemukan'], 400);
        }

        $produkUkuran->stok -= $pesanan->jumlah;
        $produkUkuran->save();

        $pesanan->status = self::STATUS_SELESAI;
        $pesanan->save();

        return response()->json(['message' => 'Pesanan selesai dan stok dikurangi', 'data' => $pesanan]);
    }

    public function completeMultiple(Request $request)
    {
        $request->validate([
            'pesanan_ids' => 'required|array',
            'pesanan_ids.*' => 'integer|exists:pesanans,id',
        ]);

        $errors = [];
        foreach ($request->pesanan_ids as $id) {
            $pesanan = Pesanans::find($id);

            if (!$pesanan || $pesanan->status !== self::STATUS_SIAP_PICKUP) {
                $errors[] = "Pesanan ID $id tidak valid untuk diselesaikan";
                continue;
            }

            $produkUkuran = ProdukUkurans::where('produks_id', $pesanan->produks_id)
                ->where('ukuran', $pesanan->ukuran)
                ->first();

            if (!$produkUkuran || $produkUkuran->stok < $pesanan->jumlah) {
                $errors[] = "Stok tidak cukup untuk pesanan ID $id";
                continue;
            }

            $produkUkuran->stok -= $pesanan->jumlah;
            $produkUkuran->save();

            $pesanan->status = self::STATUS_SELESAI;
            $pesanan->save();
        }

        return response()->json(['message' => 'Pesanan diproses', 'errors' => $errors]);
    }
    public function destroy($id)
{
    $pesanan = Pesanans::find($id);

    if (!$pesanan) {
        return response()->json(['message' => 'Pesanan tidak ditemukan'], 404);
    }

    // Opsional: Validasi status sebelum menghapus, misal hanya boleh hapus yang dibatalkan atau selesai
    if (!in_array($pesanan->status, ['dibatalkan', 'selesai'])) {
        return response()->json(['message' => 'Pesanan hanya bisa dihapus jika sudah selesai atau dibatalkan'], 400);
    }

    $pesanan->delete();

    return response()->json(['message' => 'Pesanan berhasil dihapus']);
}

}
