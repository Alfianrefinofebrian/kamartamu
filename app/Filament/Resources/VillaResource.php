<?php

namespace App\Filament\Resources;

use App\Models\Villa;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Filament\Resources\VillaResource\Pages; // Add this import

class VillaResource extends Resource
{
    protected static ?string $model = Villa::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Villas';
    protected static ?string $pluralModelLabel = 'Villas';
    protected static ?string $modelLabel = 'Villa';

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

                Forms\Components\TextInput::make('capacity')
                    ->numeric()
                    ->label('Capacity (people)'),

                Forms\Components\TextInput::make('weekday_price')
                    ->label('Weekday Price'),

                Forms\Components\TextInput::make('weekend_price')
                    ->label('Weekend Price'),

                Forms\Components\TextInput::make('holiday_price')
                    ->label('Holiday Price'),

                Forms\Components\TextInput::make('phone')
                    ->label('Phone Number'),

                Forms\Components\FileUpload::make('image')
                    ->directory('villas')
                    ->image(),

                Forms\Components\Textarea::make('note')
                    ->rows(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->square(),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('location')->sortable(),
                Tables\Columns\TextColumn::make('capacity')->label('Capacity'),
                Tables\Columns\TextColumn::make('weekday_price'),
                Tables\Columns\TextColumn::make('weekend_price'),
                Tables\Columns\TextColumn::make('holiday_price'),
                Tables\Columns\TextColumn::make('phone'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVillas::route('/'),
            'create' => Pages\CreateVilla::route('/create'),
            'edit' => Pages\EditVilla::route('/{record}/edit'),
        ];
    }
}