<?php

namespace App\Filament\Resources\SectionStyleGroupResource\Pages;

use App\Filament\Resources\SectionStyleGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionStyleGroup extends EditRecord
{
    protected static string $resource = SectionStyleGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
