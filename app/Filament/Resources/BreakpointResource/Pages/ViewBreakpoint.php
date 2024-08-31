<?php

namespace App\Filament\Resources\BreakpointResource\Pages;

use App\Filament\Resources\BreakpointResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBreakpoint extends ViewRecord
{
    protected static string $resource = BreakpointResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
