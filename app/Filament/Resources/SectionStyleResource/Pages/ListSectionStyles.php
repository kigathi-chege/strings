<?php

namespace App\Filament\Resources\SectionStyleResource\Pages;

use App\Filament\Resources\SectionStyleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionStyles extends ListRecords
{
    protected static string $resource = SectionStyleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
