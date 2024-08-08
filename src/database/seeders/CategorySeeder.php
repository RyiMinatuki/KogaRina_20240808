<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['content' => '技術的な問題'],
            ['content' => 'アカウントの問題'],
            ['content' => 'その他']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
