<?php

namespace Modules\RealEstate\Filament\Resources\PropertyResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\RealEstate\Filament\Resources\PropertyResource;

class EditProperty extends EditRecord
{
    protected static string $resource = PropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
