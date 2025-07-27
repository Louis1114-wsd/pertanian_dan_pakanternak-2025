<?php

namespace App\Filament\Admin\Resources\DistribusiResource\Pages;

use App\Filament\Admin\Resources\DistribusiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDistribusis extends ListRecords
{
    protected static string $resource = DistribusiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
