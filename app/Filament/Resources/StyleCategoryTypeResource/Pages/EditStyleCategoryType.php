<?php

namespace App\Filament\Resources\StyleCategoryTypeResource\Pages;

use App\Filament\Resources\StyleCategoryTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStyleCategoryType extends EditRecord
{
    protected static string $resource = StyleCategoryTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
