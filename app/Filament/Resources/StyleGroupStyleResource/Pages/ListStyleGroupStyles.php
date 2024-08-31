<?php

namespace App\Filament\Resources\StyleGroupStyleResource\Pages;

use App\Filament\Resources\StyleGroupStyleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStyleGroupStyles extends ListRecords
{
    protected static string $resource = StyleGroupStyleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
