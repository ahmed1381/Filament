<?php

namespace App\Filament\Resources\ContactNumbersResource\Pages;

use App\Filament\Resources\ContactNumbersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactNumbers extends EditRecord
{
    protected static string $resource = ContactNumbersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
