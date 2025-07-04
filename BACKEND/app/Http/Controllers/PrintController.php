<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prints;
use Illuminate\Support\Facades\Auth;
class PrintController extends Controller
{
       const STATUS_ANTRIAN = 'antrian';
    const STATUS_DIKEMAS = 'diproses';
    const STATUS_SIAP_PICKUP = 'siap_pickup';
    const STATUS_SELESAI = 'selesai';
    const STATUS_DIBATALKAN = 'dibatalkan';
    const STATUS_MENUNGGU_PEMBATALAN = 'menunggu_pembatalan';
   public function index()
{
    return response()->json(
        Prints::with('user')->latest()
        ->get()
    );
}
    public function batal($id)
    {
        $print = Prints::where('id', $id)->where('users_id', Auth::id())->first();

        if (!$print) {
            return response()->json(['message' => 'Pesanan tidak ditemukan atau bukan milik Anda'], 404);
        }

        if ($print->status !== self::STATUS_ANTRIAN) {
            return response()->json(['message' => 'Pesanan hanya bisa dibatalkan saat masih dalam antrian'], 400);
        }

        $print->status = self::STATUS_MENUNGGU_PEMBATALAN;
        $print->save();

        return response()->json(['message' => 'Permintaan pembatalan diajukan, menunggu konfirmasi admin']);
    }
public function show($id)
    {
        $print = Prints::with(['user'])->find($id);

        if (!$print) {
            return response()->json(['message' => 'Pesanan tidak ditemukan'], 404);
        }

        return response()->json(['success' => true, 'data' => $print]);
    }
   public function store(Request $request)
{
    $request->validate([
        'file' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png',
        'warna' => 'required|in:hitam_putih,berwarna',
        'jumlah_copy' => 'required|integer|min:1',
        'jumlah_halaman' => 'required|integer|min:1',
        'metode_pembayaran' => 'required|string',
    ]);
 $pesananprint = [];
    $file = $request->file('file');
    $filePath = $file->store('prints', 'public');

    $hargaPerLembar = $request->warna === 'berwarna' ? 1000 : 500;
    $totalHarga = $hargaPerLembar * $request->jumlah_halaman * $request->jumlah_copy;
  $user = $request->user();
        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    $print = Prints::create([
        'users_id' => $user->id,
        'nama' => $file->getClientOriginalName(),
        'file' => $filePath,
        'warna' => $request->warna,
        'harga' => $hargaPerLembar,
        'jumlah_halaman' => $request->jumlah_halaman,
        'jumlah_copy' => $request->jumlah_copy,
        'metode_pembayaran' => $request->metode_pembayaran,
        'total_harga' => $totalHarga,
    ]);
      $pesananprint[] = $print->load(['user']);


    return response()->json([
        'message' => 'Permintaan print berhasil disimpan.',
        'data' => $print
    ], 201);
}
public function adminIndex()
    {
        $print = Prints::with([ 'user'])->get();

        return response()->json(['success' => true, 'data' => $print]);
    }

   

   
    public function konfirmasiPembatalan(Request $request, $id)
    {
        $request->validate(['action' => 'required|in:approve,reject']);

        $print = Prints::find($id);
        if (!$print || $print->status !== self::STATUS_MENUNGGU_PEMBATALAN) {
            return response()->json(['message' => 'Pesanan tidak valid untuk pembatalan'], 400);
        }

        $print->status = $request->action === 'approve' ? self::STATUS_DIBATALKAN : self::STATUS_ANTRIAN;
        $print->save();

        return response()->json(['message' => 'Status pembatalan diperbarui', 'status' => $print->status]);
    }


    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:antrian,diproses,siap_pickup,selesai,dibatalkan,menunggu_pembatalan',
        ]);

        $print = Prints::find($id);
        if (!$print) {
            return response()->json(['message' => 'Pesanan tidak ditemukan'], 404);
        }

        $print->status = $request->status;
        $print->save();

        return response()->json(['message' => 'Status pesanan diperbarui']);
    }

   public function markAsCompleted($id)
{
    $print = Prints::find($id);
    if (!$print || !in_array($print->status, [
        self::STATUS_DIKEMAS,
        self::STATUS_ANTRIAN,
        self::STATUS_SIAP_PICKUP,
    ])) {
        return response()->json(['message' => 'Pesanan tidak valid untuk diselesaikan'], 400);
    }

    $print->status = self::STATUS_SELESAI;
    $print->save();

    return response()->json(['message' => 'Pesanan berhasil ditandai sebagai selesai', 'data' => $print]);
}
public function adminBatal($id)
{
    $prints = Prints::find($id);

    if (!$prints) {
        return response()->json(['message' => 'Pesanan tidak ditemukan'], 404);
    }

    if (!in_array($prints->status, [
        self::STATUS_ANTRIAN,
        self::STATUS_MENUNGGU_PEMBATALAN,
        self::STATUS_DIKEMAS
    ])) {
        return response()->json(['message' => 'Pesanan tidak bisa dibatalkan pada status ini'], 400);
    }

    $prints->status = self::STATUS_DIBATALKAN;
    $prints->save();

    return response()->json(['message' => 'Pesanan berhasil dibatalkan oleh admin']);
}

public function destroy($id)
{
    $print = prints::find($id);

    if (!$print) {
        return response()->json(['message' => 'Pesanan tidak ditemukan'], 404);
    }

    // Opsional: Validasi status sebelum menghapus, misal hanya boleh hapus yang dibatalkan atau selesai
    if (!in_array($print->status, ['dibatalkan', 'selesai'])) {
        return response()->json(['message' => 'Pesanan hanya bisa dihapus jika sudah selesai atau dibatalkan'], 400);
    }

    $print->delete();

    return response()->json(['message' => 'Pesanan berhasil dihapus']);
}



}


