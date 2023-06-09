<?php

namespace Database\Seeders;

use App\Models\DataKad3;
use Illuminate\Database\Seeder;

class DataKad3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kadData = [
            [
                'gambar' => 'example.jpg',
                'nama' => 'Arif Syaputra',
                'nim' => '22020001',
                'alamat' => 'Perum kanci alqodir Jln KancaManyar No.76',
                'telepon' => '081234567890',
                'email' => 'arifsya@gmail.com',
            ],
            [
                'gambar' => 'example01.jpg',
                'nama' => 'Syifa Nur Syaila',
                'nim' => '22020002',
                'alamat' => 'Kp Cisatar Jln LewiPendek No.50',
                'telepon' => '081234567891',
                'email' => 'syifanursyaila@gmail.com',
            ],
        ];

        foreach ($kadData as $key => $v) {
            DataKad3::create($v);
        }
    }
}
