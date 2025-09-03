<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
use App\Filament\Resources\PropertyResource\RelationManagers\ImagesRelationManager;
use App\Models\Property;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Properties';
    protected static ?string $pluralModelLabel = 'Properties';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->rows(4)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image_url')
                    ->image()
                    ->directory('properties')
                    ->maxSize(2048),
                Forms\Components\TextInput::make('capacity')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('max_capacity')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('weekday_price')
                    ->numeric()
                    ->prefix('Rp'),
                Forms\Components\TextInput::make('weekend_price')
                    ->numeric()
                    ->prefix('Rp'),
                Forms\Components\TextInput::make('holiday_price')
                    ->numeric()
                    ->prefix('Rp'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('location')->sortable(),
                Tables\Columns\ImageColumn::make('image_url')->square(),
                Tables\Columns\TextColumn::make('capacity'),
                Tables\Columns\TextColumn::make('max_capacity'),
                Tables\Columns\TextColumn::make('weekday_price')->money('IDR'),
                Tables\Columns\TextColumn::make('weekend_price')->money('IDR'),
                Tables\Columns\TextColumn::make('holiday_price')->money('IDR'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ImagesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}
