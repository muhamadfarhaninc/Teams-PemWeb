<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listdata = [
            [
                'list' => 'Membuat website ini butuh perjuangan😊',
                'status' => '',
            ],
            [
                'list' => 'Nilai betul-betul !!!',
                'status' => 'checked',
            ],
            [
                'list' => 'Copper Canyon',
                'status' => '',
            ],
            [
                'list' => 'See The Unmatched Beauty Of The Great Lakes',
                'status' => 'checked',
            ],
            [
                'list' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Provident, eius!',
                'status' => '',
            ],
        ];

        foreach ($listdata as $key => $val) {
            Todo::create($val);
        }
    }
}
