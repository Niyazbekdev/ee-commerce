<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $admin = User::create([
            'first_name' => "John",
            'last_name' => "Kenedy",
            'email' => "john@gmail.com",
            'phone' => '+998903789283',
            'password' => Hash::make('123'),
        ]);

        $admin->roles()->attach(1);

        $user = User::create([
            'first_name' => "Art Kautzer",
            'last_name' => "Chase Klocko",
            'email' => "mario.borer@example.com",
            'phone' => '1-775-870-4800',
            'password' => Hash::make('234'),
        ]);

        $user->roles()->attach(2);

        User::factory()->count(10)->hasAttached([Role::find(2)])->create();
    }
}
