<?php

namespace App\Filament\Resources\FileNumberResource\Pages;

use App\Filament\Resources\FileNumberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFileNumber extends EditRecord
{
    protected static string $resource = FileNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
