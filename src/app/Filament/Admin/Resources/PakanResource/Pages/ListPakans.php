<?php

namespace App\Filament\Admin\Resources\PakanResource\Pages;

use App\Filament\Admin\Resources\PakanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPakans extends ListRecords
{
    protected static string $resource = PakanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
