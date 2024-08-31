<?php

namespace App\Filament\Resources\SectionSectionResource\Pages;

use App\Filament\Resources\SectionSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionSections extends ListRecords
{
    protected static string $resource = SectionSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
