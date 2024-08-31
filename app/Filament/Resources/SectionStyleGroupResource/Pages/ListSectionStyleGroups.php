<?php

namespace App\Filament\Resources\SectionStyleGroupResource\Pages;

use App\Filament\Resources\SectionStyleGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionStyleGroups extends ListRecords
{
    protected static string $resource = SectionStyleGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
