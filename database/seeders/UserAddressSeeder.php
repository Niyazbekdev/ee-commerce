<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{

    public function run(): void
    {
        User::find(2)->addresses()->create([
            'latitude' => "42.461682",
            'longitude'=> " 59.611358",
            'region'=> "Karakalpakstan",
            'destrict'=> "nukus",
            'street'=> "tatibaev",
            'home'=> "839"
        ]);

        User::find(2)->addresses()->create([
            'latitude' => "42.461682",
            'longitude'=> " 59.611358",
            'region'=> "Karakalpakstan",
            'destrict'=> "nukus",
            'street'=> "sabira kamalova",
            'home'=> "22"
        ]);
    }
}
