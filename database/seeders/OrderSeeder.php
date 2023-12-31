<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{

    public function run(): void
    {
        User::find(2)->orders()->create([
            'comment' => 'Test order',
        ]);
    }
}
