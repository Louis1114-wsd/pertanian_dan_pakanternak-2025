<?php

namespace App\Filament\Admin\Resources\PupukResource\Pages;

use App\Filament\Admin\Resources\PupukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPupuk extends EditRecord
{
    protected static string $resource = PupukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
