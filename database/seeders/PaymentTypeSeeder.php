<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{

    public function run(): void
    {
        PaymentType::create([
            'name' => [
                'kaa' => 'Naq',
                'en' => "Nak",
            ]
        ]);

        PaymentType::create([
            'name' => [
                'kaa' => 'Terminal',
                'en' => "Terminal",
            ]
        ]);

        PaymentType::create([
            'name' => [
                'kaa' => 'Click',
                'en' => "Click",
            ]
        ]);

        PaymentType::create([
            'name' => [
                'kaa' => 'Payme',
                'en' => "Payme",
            ]
        ]);
    }
}
