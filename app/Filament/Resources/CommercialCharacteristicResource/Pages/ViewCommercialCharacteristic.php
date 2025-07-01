<?php

namespace App\Filament\Resources\CommercialCharacteristicResource\Pages;

use App\Filament\Resources\CommercialCharacteristicResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCommercialCharacteristic extends ViewRecord
{
    protected static string $resource = CommercialCharacteristicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
