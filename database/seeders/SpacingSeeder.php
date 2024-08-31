<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpacingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spacings = [
            "0" => "0",
            "px" => "0.0625",
            "0.5" => "0.125", // 2px
            "1" => "0.25", // 4px
            "1.5" => "0.375", // 6px
            "2" => "0.5", // 8px
            "2.5" => "0.625", // 10px
            "3" => "0.75", // 12px
            "3.5" => "0.875", // 14px
            "4" => "1", // 16px
            "5" => "1.25", // 20px
            "6" => "1.5", // 24px
            "7" => "1.75", // 28px
            "8" => "2", // 32px
            "9" => "2.25", // 36px
            "10" => "2.5", // 40px
            "11" => "2.75", // 44px
            "12" => "3", // 48px
            "14" => "3.5", // 56px
            "16" => "4", // 64px
            "20" => "5", // 80px
            "24" => "6", // 96px
            "28" => "7", // 112px
            "32" => "8", // 128px
            "36" => "9", // 144px
            "40" => "10", // 160px
            "44" => "11", // 176px
            "48" => "12", // 192px
            "52" => "13", // 208px
            "56" => "14", // 224px
            "60" => "15", // 240px
            "64" => "16", // 256px
            "72" => "18", // 288px
            "80" => "20", // 320px
            "96" => "24", // 384px
        ];

        foreach ($spacings as $name => $rem) {
            \App\Models\Spacing::create([
                "name" => $name,
                "rem" => $rem,
                "px" => ($rem * 16),
            ]);
        }
    }
}
