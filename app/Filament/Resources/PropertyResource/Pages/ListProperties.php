<?php

namespace App\Filament\Resources\PropertyResource\Pages;

use App\Filament\Resources\PropertyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProperties extends ListRecords
{
    protected static string $resource = PropertyResource::class;

    // Tell Filament which column stores the order so the table becomes reorderable
    protected function getTableReorderColumn(): ?string
    {
        return 'sort';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('reorder_hint')
                ->label('Drag rows to reorder')
                ->disabled()
                ->color('secondary'),
        ];
    }
}
