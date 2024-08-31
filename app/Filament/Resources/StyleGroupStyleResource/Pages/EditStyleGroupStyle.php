<?php

namespace App\Filament\Resources\StyleGroupStyleResource\Pages;

use App\Filament\Resources\StyleGroupStyleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStyleGroupStyle extends EditRecord
{
    protected static string $resource = StyleGroupStyleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
