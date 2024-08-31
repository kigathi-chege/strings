<?php

namespace App\Filament\Resources\SpacingResource\Pages;

use App\Filament\Resources\SpacingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpacings extends ListRecords
{
    protected static string $resource = SpacingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
