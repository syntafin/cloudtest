<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Category 1',
                'slug' => 'category-1',
                'user_id' => '1'
            ],
            [
                'name' => 'Category 2',
                'slug' => 'category-2',
                'user_id' => '1'
            ]
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'user_id' => $category['user_id'],
            ]);
        }
    }
}
