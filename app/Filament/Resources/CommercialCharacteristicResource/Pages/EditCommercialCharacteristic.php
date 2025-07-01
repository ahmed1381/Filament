<?php

namespace App\Filament\Resources\CommercialCharacteristicResource\Pages;

use App\Filament\Resources\CommercialCharacteristicResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommercialCharacteristic extends EditRecord
{
    protected static string $resource = CommercialCharacteristicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
