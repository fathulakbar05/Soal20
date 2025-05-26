<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\buku;

class peminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peminjaman')->insert([
            [
                'id_buku' => 1,
                'nama_peminjam' => "John Doe",
                'tanggal_pinjam' => '2023-10-01',
                'tanggal_kembali' => '2023-10-15',
            ],
            [
                'id_buku' => 2,
                'nama_peminjam' => "Jane Smith",
                'tanggal_pinjam' => '2023-10-05',
                'tanggal_kembali' => '2023-10-20',
            ],
        ]);
    }
}
