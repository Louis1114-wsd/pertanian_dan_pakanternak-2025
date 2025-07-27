<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms\Components\TextInput;
use App\Filament\Admin\Resources\PetaniResource\Pages;
use App\Filament\Admin\Resources\PetaniResource\RelationManagers;
use App\Models\Petani;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PetaniResource extends Resource
{
    protected static ?string $model = Petani::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->label('Nama Petani'),
                TextInput::make('alamat')
                    ->required()
                    ->label('Alamat'),
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
            'index' => Pages\ListPetanis::route('/'),
            'create' => Pages\CreatePetani::route('/create'),
            'edit' => Pages\EditPetani::route('/{record}/edit'),
        ];
    }
}
