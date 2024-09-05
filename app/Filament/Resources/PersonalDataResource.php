<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalDataResource\Pages;
use App\Filament\Resources\PersonalDataResource\RelationManagers;
use App\Models\PersonalData;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonalDataResource extends Resource
{
    protected static ?string $model = PersonalData::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('first_name')->required()->maxLength(255),
                TextInput::make('last_name')->required()->maxLength(255),
                TextInput::make('email')->required()->maxLength(255)->email(),
                TextInput::make('linkedin')->required()->maxLength(255),
                TextInput::make('website')->required()->maxLength(255),
                TextInput::make('phone')->required()->maxLength(30),
                DatePicker::make('birth_date')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name'),
                TextColumn::make('last_name'),
                TextColumn::make('email'),
                TextColumn::make('linkedin'),
                TextColumn::make('website'),
                TextColumn::make('phone'),
                TextColumn::make('birth_date'),
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
            'index' => Pages\ListPersonalData::route('/'),
            'create' => Pages\CreatePersonalData::route('/create'),
            'edit' => Pages\EditPersonalData::route('/{record}/edit'),
        ];
    }
}
