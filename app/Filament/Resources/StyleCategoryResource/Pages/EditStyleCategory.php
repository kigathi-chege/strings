<?php

namespace App\Filament\Resources\StyleCategoryResource\Pages;

use App\Filament\Resources\StyleCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStyleCategory extends EditRecord
{
    protected static string $resource = StyleCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
