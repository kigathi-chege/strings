<?php

namespace App\Filament\Resources\SpacingResource\Pages;

use App\Filament\Resources\SpacingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpacing extends EditRecord
{
    protected static string $resource = SpacingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
