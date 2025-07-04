<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanans;
use App\Models\ProdukUkurans;
use App\Models\Prints;

class DashboardController extends Controller
{
    public function index()
    {
        $belumBayar = Pesanans::where('status', 'antrian')->count();
        $pesananSelesai = Prints::where('status', 'antrian')->count(); // jika ini maksudnya
        $produkHabis = ProdukUkurans::where('stok', 0)->count();

        return response()->json([
            'belumBayar' => $belumBayar,
            'menungguResponPembatalan' => $pesananSelesai, // atau ubah nama key agar sesuai status
            'produkHabis' => $produkHabis,
        ]);
    }
}
