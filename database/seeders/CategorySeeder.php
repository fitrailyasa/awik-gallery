<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Makeup',
                'slug' => 'makeup',
                'desc' => 'Makeup',
            ],
            [
                'name' => 'Papan Bunga - Ucapan',
                'slug' => 'papan-bunga-ucapan',
                'desc' => 'Papan Bunga - Ucapan',
            ],
            [
                'name' => 'Sewa Baju - Attire',
                'slug' => 'sewa-baju-attire',
                'desc' => 'Sewa Baju - Attire',
            ],
            [
                'name' => 'Kebun',
                'slug' => 'kebun',
                'desc' => 'Kebun',
            ],
            [
                'name' => 'Link Affiliate',
                'slug' => 'link-affiliate',
                'desc' => 'Link Affiliate',
            ],
        ];

        foreach ($data as $item) {
            Category::create($item);
        }
    }
}
