<?php

namespace App\Filament\Resources\StyleCategoryResource\Pages;

use App\Filament\Resources\StyleCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStyleCategories extends ListRecords
{
    protected static string $resource = StyleCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
