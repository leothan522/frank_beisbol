<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EquipoResource\Pages;
use App\Filament\Resources\EquipoResource\RelationManagers;
use App\Models\Equipo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EquipoResource extends Resource
{
    protected static ?string $model = Equipo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->label('Nombre Completo del equipo')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('mini')
                    ->label('Nombre Corto del equipo')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(12),
                Forms\Components\TextInput::make('estadium')
                    ->label('Nombre del Estadium')
                    ->required(),
                Forms\Components\FileUpload::make('image_logo')
                    ->label('Logo del equipo')
                    ->image(),
                Forms\Components\FileUpload::make('image_estadium')
                    ->label('Imagen del Estadium')
                    ->image()
                    ->imageEditor(),
                Forms\Components\Toggle::make('activo')
                    ->required()
                    ->hiddenOn('create'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->formatStateUsing(fn (string $state) => mb_strtoupper($state))
                    ->searchable(),
                Tables\Columns\TextColumn::make('mini')
                    ->label('Abreviatura')
                    ->formatStateUsing(fn (string $state) => mb_strtoupper($state))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_logo'),
                Tables\Columns\ImageColumn::make('image_estadium')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\IconColumn::make('activo')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListEquipos::route('/'),
            'create' => Pages\CreateEquipo::route('/create'),
            'edit' => Pages\EditEquipo::route('/{record}/edit'),
        ];
    }
}
