<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User();
        $user->name = 'Abd. Asis';
        $user->email = 'mail@abdasis.my.id';
        $user->roles = 'fpm';
        $user->password = Hash::make('Abduelazies1997');
        $user->save();
    }
}
