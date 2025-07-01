<?php

namespace App\Filament\Resources\RegistrationNumberResource\Pages;

use App\Filament\Resources\RegistrationNumberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegistrationNumbers extends ListRecords
{
    protected static string $resource = RegistrationNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
