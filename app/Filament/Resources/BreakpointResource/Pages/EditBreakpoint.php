<?php

namespace App\Filament\Resources\BreakpointResource\Pages;

use App\Filament\Resources\BreakpointResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBreakpoint extends EditRecord
{
    protected static string $resource = BreakpointResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
