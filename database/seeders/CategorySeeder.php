<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        Category::create([
            'name' => [
                'kaa' => 'stol',
                'en' => 'table'
            ],
        ]);

        Category::create([
            'name' => [
                'kaa' => 'stul',
                'en' => 'chair'
            ],
        ]);

        Category::create([
            'name' => [
                'kaa' => 'rushka',
                'en' => 'pen'
            ],
        ]);

        Category::create([
            'name' => [
                'kaa' => 'dapter',
                'en' => 'notebook'
            ],
        ]);
    }
}
