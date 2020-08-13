<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Nullable;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'admin@gmail.com')->first();
        $user2 = User::where('email', 'chuks@gmail.com')->first();

        if (!$user2) {
            User::create([
                'name' => 'Chuks Ossai',
                'email' => 'chuks@gmail.com',
                'role' => 'writer',
                'profile_image' => Null,
                'password' => Hash::make('password')
            ]);
        }

        if (!$user) {
            User::create([
                'name' => 'Blog Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'profile_image' => Null,
                'password' => Hash::make('password')
            ]);
        }
    }
}
