<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{

    public function run(): void
    {
        DeliveryMethod::create([
            'name' => [
                'kaa' => 'tegin',
                'en' => 'free'
            ],
            'estimated_time' => [
                'kaa' => '5 kun',
                'en' => '5 day'
            ],
            'sum' => 0,
        ]);

        DeliveryMethod::create([
            'name' => [
                'kaa' => 'standart',
                'en' => 'default'
            ],
            'estimated_time' => [
                'kaa' => '3 kun',
                'en' => '3 day'
            ],
            'sum' => 40000,
        ]);

        DeliveryMethod::create([
            'name' => [
                'kaa' => 'tez',
                'en' => 'super'
            ],
            'estimated_time' => [
                'kaa' => '1 kun',
                'en' => '1 day'
            ],
            'sum' => 80000,
        ]);
    }
}
