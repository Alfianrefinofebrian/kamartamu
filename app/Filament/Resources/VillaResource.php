<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VillaResource\Pages;
use App\Models\Villa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class VillaResource extends Resource
{
    protected static ?string $model = Villa::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationLabel = 'Villas';
    protected static ?string $pluralModelLabel = 'Villas';
    protected static ?string $modelLabel = 'Villa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Villa')
                    ->required(),

                TextInput::make('location')
                    ->label('Lokasi')
                    ->required(),

                FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->directory('villas'),

                Textarea::make('short_description')
                    ->label('Deskripsi Singkat'),

                Textarea::make('long_description')
                    ->label('Deskripsi Lengkap'),

                TextInput::make('capacity')
                    ->label('Kapasitas')
                    ->numeric(),

                TextInput::make('weekday_price')
                    ->label('Harga Weekday'),

                TextInput::make('weekend_price')
                    ->label('Harga Weekend / Hari Libur'),

                TextInput::make('holiday_price')
                    ->label('Harga Hari Besar'),

                TextInput::make('contact')
                    ->label('Kontak'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Foto')
                    ->square(),

                TextColumn::make('name')
                    ->label('Nama Villa')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('location')
                    ->label('Lokasi'),

                TextColumn::make('weekday_price')
                    ->label('Harga Weekday'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
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
