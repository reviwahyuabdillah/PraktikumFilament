<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MakulResource\Pages;
use App\Filament\Resources\MakulResource\RelationManagers;
use App\Models\Makul;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MakulResource extends Resource
{
    protected static ?string $model = Makul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('kode')
                ->label('Kode')
                ->required()
                ->unique(ignoreRecord: true) // Mencegah duplikasi saat edit
                ->maxLength(10),
                TextInput::make('nama')
                ->label('Nama Mata Kuliah')
                ->required()
                ->maxLength(128),
                TextInput::make('sks')
                ->label('SKS')
                ->required()
                ->numeric()
                ->minValue(1)
                ->maxValue(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('kode')->label('Kode')->sortable()->searchable(),
                TextColumn::make('nama')->label('Nama Mata Kuliah')->sortable()->searchable(),
                TextColumn::make('sks')->label('SKS')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListMakuls::route('/'),
            'create' => Pages\CreateMakul::route('/create'),
            'edit' => Pages\EditMakul::route('/{record}/edit'),
        ];
    }
}
