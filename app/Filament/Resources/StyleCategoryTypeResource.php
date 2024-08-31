<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StyleCategoryTypeResource\Pages;
use App\Filament\Resources\StyleCategoryTypeResource\RelationManagers;
use App\Models\StyleCategoryType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StyleCategoryTypeResource extends Resource
{
    protected static ?string $model = StyleCategoryType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStyleCategoryTypes::route('/'),
            'create' => Pages\CreateStyleCategoryType::route('/create'),
            'edit' => Pages\EditStyleCategoryType::route('/{record}/edit'),
        ];
    }
}
