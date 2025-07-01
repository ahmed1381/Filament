<?php

namespace App\Filament\Resources\RegistrationNumberResource\Pages;

use App\Filament\Resources\RegistrationNumberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegistrationNumber extends EditRecord
{
    protected static string $resource = RegistrationNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
