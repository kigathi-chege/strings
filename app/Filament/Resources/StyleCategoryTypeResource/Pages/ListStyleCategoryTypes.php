<?php

namespace App\Filament\Resources\StyleCategoryTypeResource\Pages;

use App\Filament\Resources\StyleCategoryTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStyleCategoryTypes extends ListRecords
{
    protected static string $resource = StyleCategoryTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
