<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{

    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'kaa' => "qizil",
                'en' => "red"
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'kaa' => "jasil",
                'en' => "green"
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'kaa' => "kok",
                'en' => "blue"
            ]
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'kaa' => "LDSP",
                'en' => "LDSP"
            ]
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'kaa' => "MDF",
                'en' => "MDF"
            ]
        ]);
    }
}
