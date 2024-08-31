<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Style;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info("Seeding sections table");
        $sections = [
            [
                'title' => 'Banner',
                'type' => 'div',
                // TODO: Kigathi - August 31 2024 - Need a way to create dynamic tailwindcss classes automatically
                'styles' => 'w-full h-[250px] bg-black flex items-center justify-between',
                'sections' => [
                    [
                        'title' => 'Text',
                        'type' => 'text',
                        'styles' => 'text-base text-black',
                        'content' => 'tailwindlabs / tailwindcss-forms',
                    ],
                    [
                        'title' => 'Image',
                        'type' => 'image',
                        'styles' => 'w-8 h-8 object-cover',
                        'content' => 'https://avatars.githubusercontent.com/u/30687709?v=4',
                    ],
                ],
            ],
        ];

        $this->createSections($sections);

    }

    public function createSections($sections)
    {
        $preparedSections = collect();
        foreach ($sections as $section) {
            $createdSection = Section::firstOrCreate([
                'title' => $section['title'],
                'type' => $section['type'] ?? 'div',
                'content' => $section['content'] ?? null,
            ]);

            if (isset($section['sections'])) {
                $childSections = $this->createSections($section['sections']);
                $createdSection->children()->attach(
                    $childSections->pluck('id')->toArray(),
                    ['index' => 0]
                );
            }

            if (isset($section['styles'])) {
                $styles = $this->attachStyles(explode(' ', $section['styles']));
                $createdSection->styles()->attach(
                    $styles->pluck('id')->toArray()
                );
            }

            $preparedSections->push($createdSection);
        }
        return $preparedSections;
    }

    private function attachStyles($styles)
    {
        $preparedStyles = collect();
        foreach ($styles as $style) {
            $foundStyle = Style::where([
                'title' => $style,
            ])->first();
            if ($foundStyle) {
                $preparedStyles->push($foundStyle);
            } else {
                $this->command->error("Style not found: {$style}");
            }
        }
        return $preparedStyles;
    }
}
