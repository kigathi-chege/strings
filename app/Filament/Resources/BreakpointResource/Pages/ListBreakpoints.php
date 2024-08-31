<?php

namespace App\Filament\Resources\BreakpointResource\Pages;

use App\Filament\Resources\BreakpointResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBreakpoints extends ListRecords
{
    protected static string $resource = BreakpointResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
