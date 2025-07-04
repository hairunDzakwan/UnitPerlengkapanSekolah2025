<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjangs;
use App\Models\Produks;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    // Ambil semua item di keranjang
    public function index()
    {
        $keranjangs = Keranjangs::with(['produks', 'user'])->get();

        return response()->json([
            'success' => true,
            'data' => $keranjangs
        ]);
    }

    // Tambah produk ke keranjang
    public function store(Request $request)
    {
        $user = auth()->user();
    
        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    
        // Jika produk hanya memiliki satu ukuran
        if ($request->has('ukuran')) {
            $request->validate([
                'produks_id' => 'required|exists:produks,id',
                'ukuran' => 'required|string', // Validasi ukuran tunggal
                'jumlah' => 'required|integer|min:1',
            ]);
    
            // Simpan ukuran tunggal sebagai string
            $ukuran = $request->ukuran; 
        } else {
            // Validasi ukuran jika ada beberapa jenis ukuran
            $request->validate([
                'produks_id' => 'required|exists:produks,id',
                'ukuran_almamater' => 'required|string',
                'ukuran_baju' => 'required|string',
                'ukuran_celana' => 'required|string',
                'jumlah' => 'required|integer|min:1',
            ]);
    
            // Gabungkan ukuran menjadi satu string yang dipisahkan koma
            $ukuran = $request->ukuran_almamater . ',' . $request->ukuran_baju . ',' . $request->ukuran_celana;
        }
    
        // Simpan data keranjang
        $keranjang = Keranjangs::create([
            'users_id' => $user->id,
            'produks_id' => $request->produks_id,
            'ukuran' => $ukuran,  // Simpan sebagai string yang lebih sederhana
            'jumlah' => $request->jumlah,
        ]);
    
        return response()->json([
            'message' => 'Produk ditambahkan ke keranjang',
            'data' => $keranjang
        ], 201);
    }
    
    

    // Update jumlah produk dalam keranjang
    public function update(Request $request, $id)
    {
        $keranjang = Keranjangs::where('users_id', Auth::id())->findOrFail($id);

        $request->validate([
            'jumlah' => 'required|integer|min:1',
        ]);

        $keranjang->update(['jumlah' => $request->jumlah]);

        return response()->json([
            'message' => 'Jumlah produk diperbarui',
            'data' => $keranjang
        ]);
    }

    // Hapus item dari keranjang
    public function destroy($id)
    {
        try {
            $keranjang = Keranjangs::findOrFail($id);
            $keranjang->delete();

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil dihapus dari keranjang'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus produk: ' . $e->getMessage()
            ], 500);
        }
    }

    // Tampilkan detail item keranjang berdasarkan ID
    public function show($id)
    {
        $keranjang = Keranjangs::with('produks')->where('users_id', Auth::id())->findOrFail($id);
        return response()->json([
            'message' => 'Detail keranjang',
            'data' => $keranjang
        ]);
    }
}
