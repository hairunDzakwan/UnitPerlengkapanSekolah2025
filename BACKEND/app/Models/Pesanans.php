<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanans extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'produks_id',
        'prints_id',
        'jumlah',
        'ukuran',
        'total_harga',
        'metode_pembayaran', // harus ada
    'pesan',   
        'status',

        'status_sebelumnya', 
    ];

    // Relasi ke User
    public function prints()
{
    return $this->belongsTo(Prints::class, 'prints_id');
}
    public function produks()
    {
        return $this->belongsTo(Produks::class, 'produks_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function produkUkuran()
    {
        return $this->hasOneThrough(ProdukUkurans::class, Produks::class, 'produks_id', 'produks_id');
    }
}
