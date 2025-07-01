<?php

namespace App\Filament\Resources\ContactNumbersResource\Pages;

use App\Filament\Resources\ContactNumbersResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContactNumbers extends ViewRecord
{
    protected static string $resource = ContactNumbersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
