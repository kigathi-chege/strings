<?php

namespace App\Filament\Resources\SectionStyleResource\Pages;

use App\Filament\Resources\SectionStyleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionStyle extends EditRecord
{
    protected static string $resource = SectionStyleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
