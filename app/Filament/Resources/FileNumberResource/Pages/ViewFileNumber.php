<?php

namespace App\Filament\Resources\FileNumberResource\Pages;

use App\Filament\Resources\FileNumberResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFileNumber extends ViewRecord
{
    protected static string $resource = FileNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
