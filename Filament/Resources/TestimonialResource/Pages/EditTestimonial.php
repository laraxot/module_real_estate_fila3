<?php

namespace Modules\RealEstate\Filament\Resources\TestimonialResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\RealEstate\Filament\Resources\TestimonialResource;

class EditTestimonial extends EditRecord
{
    protected static string $resource = TestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
