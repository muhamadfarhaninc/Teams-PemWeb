<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Muhamad Farhan',
                'email' => 'muhamadfarhan.inc@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('123456'),
                'gambar' => 'example.jpg',
            ],
            [
                'name' => 'Eko Kurniawan Khannedy',
                'email' => 'kurniawankhannedy.inc@gmail.com',
                'password' => bcrypt('123456'),
                'gambar' => '',
            ],
            [
                'name' => 'Sandhika Galih',
                'email' => 'wpuunpas.inc@gmail.com',
                'password' => bcrypt('123456'),
                'gambar' => '',
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
