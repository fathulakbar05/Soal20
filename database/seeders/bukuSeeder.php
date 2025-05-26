<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bukus')->insert([
            [
                'judul' => 'Belajar Laravel',
                'pengarang' => 'John Doe',
                'penerbit' => 'Penerbit A',
                'tahun_terbit' => '2023',
            ],
            [
                'judul' => 'Pemrograman PHP',
                'pengarang' => 'Jane Smith',
                'penerbit' => 'Penerbit B',
                'tahun_terbit' => '2022',
            ],
            [
                'judul' => 'Database MySQL',
                'pengarang' => 'Alice Johnson',
                'penerbit' => 'Penerbit C',
                'tahun_terbit' => '2021',
            ],
        ]);
    }
}
