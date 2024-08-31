<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            ['title' => 'tailwindlabs/tailwindcss-forms: A plugin that provides a basic reset for form styles that makes form elements easy to override with utilities.']
        ];

        foreach($pages as $page) {
            \App\Models\Page::firstOrCreate($page);
        }
    }
}
