<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder {
    public function run() {
        // $produkId = DB::table('produks')->insertGetId([
        //     'nama' => 'Almamater perempuan',
        //     'deskripsi' => 'Jaket almamater berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'almapr.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId, 'ukuran' => 'S', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId, 'ukuran' => 'M', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId, 'ukuran' => 'L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId, 'ukuran' => 'XL', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId, 'ukuran' => 'XXL', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId, 'ukuran' => '3L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId, 'ukuran' => '4L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId, 'ukuran' => '5L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId, 'ukuran' => '6L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId, 'ukuran' => '7L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId1 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju Putih perempuan',
        //     'deskripsi' => 'Baju putih berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'putihpr.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId1, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '22', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId1, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId2 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju Batik Perempuan',
        //     'deskripsi' => 'Baju Batik berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'batikpr.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId2, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId2, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId2, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId2, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId2, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId2, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId2, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId2, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId2, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId2, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId2, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId2, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId3 = DB::table('produks')->insertGetId([
        //     'nama' => 'Olahraga Perempuan',
        //     'deskripsi' => 'Olahraga berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'skjpr.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId3, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '22', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId3, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId4 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju Praktek Perempuan',
        //     'deskripsi' => 'Baju Praktek berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'praktek.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId4, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '22', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId4, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId5 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju Pramuka perempuan',
        //     'deskripsi' => 'Baju Pramuka berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'pramukapr.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId5, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '22', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId5, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId6 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju skj perempuan',
        //     'deskripsi' => 'Baju skj berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'olahragapr.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId6, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '22', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId6, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId7 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju ALmet Lakilaki',
        //     'deskripsi' => 'almamater berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'group 87.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId7, 'ukuran' => 'S', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId7, 'ukuran' => 'M', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId7, 'ukuran' => 'L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId7, 'ukuran' => 'XL', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId7, 'ukuran' => 'XXL', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId7, 'ukuran' => '3L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId7, 'ukuran' => '4L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId7, 'ukuran' => '5L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId7, 'ukuran' => '6L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId7, 'ukuran' => '7L', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId8 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju Putih Lakilaki',
        //     'deskripsi' => 'Baju putih berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'bj putih lk.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId8, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '22', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId8, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId9 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju Batik Lakilaki',
        //     'deskripsi' => 'Baju batik berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'lakibatik.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId9, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '22', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId9, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId10 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju Pramuka lakilaki',
        //     'deskripsi' => 'Baju pramuka berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'lakipramuka.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId10, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '22', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId10, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId11 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju Olahraga lakilaki', 
        //     'deskripsi' => 'Baju olahraga berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'lakiolahraga.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId11, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '22', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId11, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId12 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju Praktek lakilaki',
        //     'deskripsi' => 'Baju praktek berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'lakipraktek.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId12, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '22', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId12, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId13 = DB::table('produks')->insertGetId([
        //     'nama' => 'Baju skj lakilaki',
        //     'deskripsi' => 'Baju skj berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'lakiskj.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId13, 'ukuran' => '13', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId13, 'ukuran' => '14', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId13, 'ukuran' => '15', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId13, 'ukuran' => '16', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId13, 'ukuran' => '17', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],            
        //     ['produks_id' => $produkId13, 'ukuran' => '18', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId13, 'ukuran' => '19', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId13, 'ukuran' => '20', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId13, 'ukuran' => '21', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId13, 'ukuran' => '22', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId13, 'ukuran' => '23', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId13, 'ukuran' => '24', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId13, 'ukuran' => '25', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId14 = DB::table('produks')->insertGetId([
        //     'nama' => 'Celana Abu',
        //     'deskripsi' => 'Celana berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'clnaaabuharga.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId14, 'ukuran' => '26', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '27', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '28', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '29', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '30', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '31', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '32', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '33', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '34', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '35', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '36', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '37', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '38', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '39', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '40', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '41', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '42', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '43', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '44', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '45', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '46', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '47', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '48', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '49', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId14, 'ukuran' => '50', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId15 = DB::table('produks')->insertGetId([
        //     'nama' => 'Celana Olharga lakilaki',
        //     'deskripsi' => 'Celana berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'clnaolgacwoharga.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId15, 'ukuran' => '26', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '27', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '28', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '29', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '30', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '31', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '32', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '33', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '34', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '35', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '36', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '37', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '38', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '39', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '40', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '41', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '42', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '43', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '44', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '45', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '46', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '47', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '48', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '49', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId15, 'ukuran' => '50', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId16 = DB::table('produks')->insertGetId([
        //     'nama' => 'Celana Pramuka',
        //     'deskripsi' => 'Celana berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'clnapramukaharga.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId16, 'ukuran' => '26', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '27', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '28', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '29', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],            
        //     ['produks_id' => $produkId16, 'ukuran' => '30', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '31', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],            
        //     ['produks_id' => $produkId16, 'ukuran' => '32', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '33', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '34', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '35', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '36', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '37', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '38', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '39', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '40', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '41', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '42', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '43', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '44', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '45', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '46', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '47', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '48', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '49', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId16, 'ukuran' => '50', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId17 = DB::table('produks')->insertGetId([
        //     'nama' => 'Rok Abu',
        //     'deskripsi' => 'Rok berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'rokabuhrga.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId17, 'ukuran' => '26', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '27', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '28', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '29', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '30', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '31', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '32', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '33', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '34', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '35', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '36', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '37', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '38', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId17, 'ukuran' => '39', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        // $produkId18 = DB::table('produks')->insertGetId([
        //     'nama' => 'Celana Olahraga Perempuan',
        //     'deskripsi' => 'Celana berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'clnaolgacweharga.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId18, 'ukuran' => '26', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '27', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '28', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '29', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '30', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '31', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '32', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '33', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '34', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '35', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '36', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '37', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '38', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '39', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '40', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '41', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '42', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '43', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '44', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '45', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '46', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '47', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '48', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '49', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId18, 'ukuran' => '50', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        
        // $produkId19 = DB::table('produks')->insertGetId([
        //     'nama' => 'Rok Pramuka Perempuan',
        //     'deskripsi' => 'Rokberkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'rokpramkhrga.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('produk_ukurans')->insert([
        //     ['produks_id' => $produkId19, 'ukuran' => '26', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '27', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '28', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '29', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '30', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '31', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '32', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '33', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '34', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '35', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '36', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '37', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '38', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        //     ['produks_id' => $produkId19, 'ukuran' => '39', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        // ]);
        
        // $produkId20 = DB::table('produks')->insertGetId([
        //     'nama' => 'Lambang dbp',
        //     'deskripsi' => 'Lambang berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'dbp.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId20,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

        // $produkId21 = DB::table('produks')->insertGetId([
        //     'nama' => 'Lambang rpl',
        //     'deskripsi' => 'Lambang berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'rpl.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId21,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

        // $produkId22 = DB::table('produks')->insertGetId([
        //     'nama' => 'Lambang tkj',
        //     'deskripsi' => 'Lambang berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'tkj.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId22,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

        // $produkId23 = DB::table('produks')->insertGetId([
        //     'nama' => 'Lambang Telkom',
        //     'deskripsi' => 'Lambang berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'telkomsch.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId23,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

        // $produkId24 = DB::table('produks')->insertGetId([
        //     'nama' => 'Lambang Gudep Perempuan',
        //     'deskripsi' => 'Lambang berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'gudeppr.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId24,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

        // $produkId25 = DB::table('produks')->insertGetId([
        //     'nama' => 'Lambang Gudep laki-laki',
        //     'deskripsi' => 'Lambang berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'gudeplk.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId25,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

        
        // $produkId26 = DB::table('produks')->insertGetId([
        //     'nama' => 'Lambang Makassar',
        //     'deskripsi' => 'Lambang berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'makassar.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId26,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

        // $produkId27 = DB::table('produks')->insertGetId([
        //     'nama' => 'Lambang Telkom Coklat',
        //     'deskripsi' => 'Lambang berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'smktelkomcklt.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId27,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

        // $produkId28 = DB::table('produks')->insertGetId([
        //     'nama' => 'Lambang SMK Telkom Putih',
        //     'deskripsi' => 'Lambang berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'smktelkom.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId28,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

        // $produkId29 = DB::table('produks')->insertGetId([
        //     'nama' => 'Topi',
        //     'deskripsi' => 'Topi berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'topiharga.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId29,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

        // $produkId30 = DB::table('produks')->insertGetId([
        //     'nama' => 'Dasi',
        //     'deskripsi' => 'Dasi berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'dasihrga.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId30,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

        // $produkId31 = DB::table('produks')->insertGetId([
        //     'nama' => 'Lambang Tel',
        //     'deskripsi' => 'Lambang berkualitas tinggi',
        //     'harga' => 125000,
        //     'gambar' => 'tel.png',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('produk_ukurans')->insert([
        //     'produks_id' => $produkId31,
        //     'ukuran' => 'All Size',
        //     'stok' => 50,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        

// Paket Laki-Laki// Paket Laki-Laki
$produkIdLaki = DB::table('produks')->insertGetId([
    'nama' => 'Paket Laki-Laki',
    'deskripsi' => 'Paket seragam lengkap untuk laki-laki',
    'harga' => 200000,
    'gambar' => 'pktlaki.png',
    'created_at' => now(),
    'updated_at' => now()
]);

$ukuranAlmet = ['S', 'M', 'L', 'XL', 'XXL', '3L', '4L', '5L', '6L', '7L'];
$ukuranBaju = ['13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25'];
$ukuranCelana = ['26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39','40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50'];

// Ukuran Almamater
foreach ($ukuranAlmet as $ukuran) {
    DB::table('produk_ukurans')->insert([
        'produks_id' => $produkIdLaki,
        'ukuran' => $ukuran,
        'stok' => 5,
        'kategori' => 'almamater',
        'created_at' => now(),
        'updated_at' => now()
    ]);
}

// Ukuran Baju
foreach ($ukuranBaju as $ukuran) {
    DB::table('produk_ukurans')->insert([
        'produks_id' => $produkIdLaki,
        'ukuran' => $ukuran,
        'stok' => 5,
        'kategori' => 'baju',
        'created_at' => now(),
        'updated_at' => now()
    ]);
}

// Ukuran Celana
foreach ($ukuranCelana as $ukuran) {
    DB::table('produk_ukurans')->insert([
        'produks_id' => $produkIdLaki,
        'ukuran' => $ukuran,
        'stok' => 5,
        'kategori' => 'celana',
        'created_at' => now(),
        'updated_at' => now()
    ]);
}

// Paket Perempuan
$produkIdCwe = DB::table('produks')->insertGetId([
    'nama' => 'Paket Perempuan',
    'deskripsi' => 'Paket seragam lengkap untuk perempuan',
    'harga' => 200000,
    'gambar' => 'pktcwe.png',
    'created_at' => now(),
    'updated_at' => now()
]);

foreach ($ukuranAlmet as $ukuran) {
    DB::table('produk_ukurans')->insert([
        'produks_id' => $produkIdCwe,
        'ukuran' => $ukuran,
        'stok' => 5,
        'kategori' => 'almamater',
        'created_at' => now(),
        'updated_at' => now()
    ]);
}

foreach ($ukuranBaju as $ukuran) {
    DB::table('produk_ukurans')->insert([
        'produks_id' => $produkIdCwe,
        'ukuran' => $ukuran,
        'stok' => 5,
        'kategori' => 'baju',
        'created_at' => now(),
        'updated_at' => now()
    ]);
}

foreach ($ukuranCelana as $ukuran) {
    DB::table('produk_ukurans')->insert([
        'produks_id' => $produkIdCwe,
        'ukuran' => $ukuran,
        'stok' => 5,
        'kategori' => 'rok', // misalnya 'rok' untuk perempuan
        'created_at' => now(),
        'updated_at' => now()
    ]);
}

    }
}
