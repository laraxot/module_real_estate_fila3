<?php

namespace Modules\RealEstate\Filament\Resources\PropertyResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\RealEstate\Filament\Resources\PropertyResource;

class ListProperties extends ListRecords
{
    protected static string $resource = PropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
