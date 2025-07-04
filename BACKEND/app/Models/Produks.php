<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produks extends Model {
    use HasFactory;

    protected $table = 'produks'; // Pastikan nama tabel sesuai dengan database

    protected $fillable = ['nama', 'deskripsi', 'harga', 'gambar'];

    // Relasi ke Keranjang
    public function keranjangs() {
        return $this->hasMany(Keranjangs::class, 'produks_id');
    }

    // Relasi ke ProdukUkurans
    public function ukurans()
    {
        return $this->hasMany(ProdukUkurans::class, 'produks_id');
    }
    public function pesanans()
{
    return $this->hasMany(Pesanans::class, 'produks_id');
}

}
