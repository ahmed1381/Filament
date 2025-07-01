<?php

namespace App\Filament\Resources\RegistrationNumberResource\Pages;

use App\Filament\Resources\RegistrationNumberResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRegistrationNumber extends ViewRecord
{
    protected static string $resource = RegistrationNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
