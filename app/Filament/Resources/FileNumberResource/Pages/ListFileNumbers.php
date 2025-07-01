<?php

namespace App\Filament\Resources\FileNumberResource\Pages;

use App\Filament\Resources\FileNumberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFileNumbers extends ListRecords
{
    protected static string $resource = FileNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
