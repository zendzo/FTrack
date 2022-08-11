<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Makanan',
            'Minuman',
            'Makanan Ringan',
            'Alat Tulis Kantor'
        ];

        foreach ($categories as $key => $category) {
            Category::create([
                'name' => $category,
                'description' => $category,
                'code' => $key
            ]);
        }
    }
}
