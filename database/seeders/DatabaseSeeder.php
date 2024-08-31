<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@strings.test',
            'password' => bcrypt('password'),
        ]);

        $this->call(ColorSeeder::class);
        $this->call(SpacingSeeder::class);
        $this->call(BreakpointSeeder::class);
        $this->call(StyleSeeder::class);
    }
}
