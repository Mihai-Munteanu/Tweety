<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('migrate:fresh');

        $adminUser = \App\Models\User::factory()->create(
            [
                'name' => 'Admin',
                'username' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('123456789'),
            ]
        );

        \App\Models\Tweet::factory(5)->create(
            [
                'user_id' => 1,
            ]
        );
        \App\Models\User::factory(10)->create();
        \App\Models\Tweet::factory(5)->create(
            [
                'user_id' => 2,
            ]
        );
        \App\Models\Tweet::factory(5)->create(
            [
                'user_id' => 3,
            ]
        );

        $secondUser = \App\Models\User::find(2);
        $thirdUser = \App\Models\User::find(3);

        $adminUser->follow($secondUser);
        $adminUser->follow($thirdUser);
    }
}
