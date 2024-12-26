<?php

namespace Database\Seeders;

use App\Models\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'email' => 'ahmadafriadi0@gmail.com',
            'password' => Hash::make('asalada123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        $this->call([
            CategorySeeder::class,
            TypeSeeder::class,
            ColorSeeder::class,
        ]);
    }
}
