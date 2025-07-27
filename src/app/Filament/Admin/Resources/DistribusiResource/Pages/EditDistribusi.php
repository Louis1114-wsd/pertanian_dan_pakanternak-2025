<?php

namespace App\Filament\Admin\Resources\DistribusiResource\Pages;

use App\Filament\Admin\Resources\DistribusiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDistribusi extends EditRecord
{
    protected static string $resource = DistribusiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
