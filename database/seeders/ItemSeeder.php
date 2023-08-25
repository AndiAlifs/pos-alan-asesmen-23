<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seederItem = [
            [
                'name' => 'Nasi Goreng',
                'price' => 15000,
                'photo' => 'https://i.ibb.co/0jZ3qYJ/nasi-goreng.jpg'
            ],
            [
                'name' => 'Mie Goreng',
                'price' => 25000,
                'photo' => 'https://i.ibb.co/0jZ3qYJ/nasi-goreng.jpg'
            ],
            [
                'name' => 'Nasi Kuning',
                'price' => 20000,
                'photo' => 'https://i.ibb.co/0jZ3qYJ/nasi-goreng.jpg'
            ]                
        ];
        foreach ($seederItem as $item) {
            Item::create($item);
        }
    }
}
