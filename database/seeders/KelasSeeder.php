<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            [
                'nama_kelas' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}