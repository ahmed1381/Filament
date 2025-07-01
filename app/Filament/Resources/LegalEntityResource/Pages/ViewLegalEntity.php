<?php

namespace App\Filament\Resources\LegalEntityResource\Pages;

use App\Filament\Resources\LegalEntityResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLegalEntity extends ViewRecord
{
    protected static string $resource = LegalEntityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
