<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prints extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'nama',
        'file',
        'warna',
        'harga',
        'jumlah_copy',
        'jumlah_halaman',
        'metode_pembayaran',
        'total_harga',
    ];
    public function keranjangs() {
        return $this->hasMany(Keranjangs::class, 'produks_id');
    }

    // Relasi ke ProdukUkurans
   public function user()
    {
        return $this->belongsTo(User::class , 'users_id');
    }
    public function pesanans()
{
    return $this->hasMany(Pesanans::class, 'produks_id');
}
}
