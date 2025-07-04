<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukUkurans extends Model {
    use HasFactory;
    protected $table = 'produk_ukurans';
    protected $fillable = ['produks_id', 'ukuran', 'stok'];

    public function produks() {
        return $this->belongsTo(Produks::class);
    }
}
