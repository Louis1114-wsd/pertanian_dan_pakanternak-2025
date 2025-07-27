<?php

namespace App\Filament\Admin\Resources\PetaniResource\Pages;

use App\Filament\Admin\Resources\PetaniResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPetani extends EditRecord
{
    protected static string $resource = PetaniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
