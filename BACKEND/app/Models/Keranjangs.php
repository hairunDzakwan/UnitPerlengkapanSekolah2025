<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjangs extends Model
{
    use HasFactory;

    protected $fillable = ['users_id', 'produks_id', 'prints_id', 'ukuran', 'jumlah',];

    // Relasi ke Produk (satu keranjang punya satu produk)
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
}
