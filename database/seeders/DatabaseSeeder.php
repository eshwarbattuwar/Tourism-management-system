<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PlacesSeeder::class,
        ]);

        $user = new \App\Models\User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = Hash::make('admin123'); // or any password you want
        $user->type = 'admin'; // or whatever integer means admin in your app
        $user->save();
    }
}
