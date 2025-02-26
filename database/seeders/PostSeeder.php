<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Post 1',
                'slug' => 'post-1',
                'user_id' => '1',
                'category_id' => '1',
                'content' => 'Post 1 content',
                'image_path' => 'files/demo.webp',
                'is_published' => true,
                'is_featured' => false,
            ]
        ];

        foreach ($posts as $post) {
            Post::create([
                'title' => $post['title'],
                'slug' => $post['slug'],
                'user_id' => $post['user_id'],
                'category_id' => $post['category_id'],
                'content' => $post['content'],
                'image_path' => $post['image_path'],
                'is_published' => $post['is_published'],
                'is_featured' => $post['is_featured'],
            ]);
        }
    }
}
