<?php

namespace App\Filament\Resources\StyleGroupResource\Pages;

use App\Filament\Resources\StyleGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStyleGroups extends ListRecords
{
    protected static string $resource = StyleGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
