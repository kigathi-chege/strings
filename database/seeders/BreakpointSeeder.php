<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BreakpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $breakpoints = [
            "sm" => "640",
            "md" => "768",
            "lg" => "1024",
            "xl" => "1280",
            "2xl" => "1536",
        ];

        foreach ($breakpoints as $name => $px) {
            \App\Models\Breakpoint::create([
                "name" => $name,
                "rem" => $px / 16,
                "px" => $px,
            ]);
        }
    }
}
