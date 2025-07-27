<?php

namespace App\Filament\Admin\Resources\PetaniResource\Pages;

use App\Filament\Admin\Resources\PetaniResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPetanis extends ListRecords
{
    protected static string $resource = PetaniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
