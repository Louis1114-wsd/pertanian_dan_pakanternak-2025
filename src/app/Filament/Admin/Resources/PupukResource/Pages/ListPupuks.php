<?php

namespace App\Filament\Admin\Resources\PupukResource\Pages;

use App\Filament\Admin\Resources\PupukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPupuks extends ListRecords
{
    protected static string $resource = PupukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
