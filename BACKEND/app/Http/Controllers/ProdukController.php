<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produks;
use App\Models\ProdukUkurans; // Menyertakan model untuk produk ukuran
use Illuminate\Support\Facades\Storage; // Untuk menyimpan gambar

class ProdukController extends Controller
{
    // Get semua produk
    public function index()
    {
        return response()->json(Produks::all());
    }

    // Get produk berdasarkan ID
    public function show($id)
    {
        $produk = Produks::with('ukurans')->find($id);
        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }
        return response()->json($produk);
    }

    // Update produk berdasarkan ID
    public function update(Request $request, $id)
    {
        $produk = Produks::find($id);
        if (!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }
    
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|string', // Karena dikirim dalam JSON, bukan file upload
            'ukurans' => 'required|array',
            'ukurans.*.id' => 'required|exists:produk_ukurans,id',
            'ukurans.*.stok' => 'required|numeric|min:0',
        ]);
    
        try {
            $produk->update([
                'nama' => $validated['nama'],
                'deskripsi' => $validated['deskripsi'],
                'harga' => $validated['harga'],
                'gambar' => $validated['gambar'] ?? $produk->gambar,
            ]);
    
            foreach ($validated['ukurans'] as $ukuran) {
                $produkUkuran = ProdukUkurans::find($ukuran['id']);
                if ($produkUkuran) {
                    $produkUkuran->update([
                        'stok' => $ukuran['stok'],
                    ]);
                }
            }
    
            return response()->json($produk->load('ukurans'), 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal mengupdate produk',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
}
