<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartidoResource\Pages;
use App\Filament\Resources\PartidoResource\RelationManagers;
use App\Models\Partido;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartidoResource extends Resource
{
    protected static ?string $model = Partido::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Titulo')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('fecha')
                    ->required(),
                Forms\Components\TimePicker::make('hora')
                    ->required()
                    ->seconds(false),
                Forms\Components\Select::make('equipo_local_id')
                    ->relationship('equipo_local', 'nombre')
                    ->required()
                    ->searchable()
                    ->preload(),
                Forms\Components\Select::make('equipo_visitante_id')
                    ->relationship('equipo_visitante', 'nombre')
                    ->required()
                    ->searchable()
                    ->preload(),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->columnSpanFull()
                    ->activeUrl(),
                Forms\Components\Toggle::make('finalizado')
                    ->hiddenOn('create'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fecha')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hora')
                    ->time('h:i a'),
                Tables\Columns\TextColumn::make('equipo_local.mini')
                    ->formatStateUsing(fn (string $state) => mb_strtoupper($state))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('equipo_visitante.mini')
                    ->formatStateUsing(fn (string $state) => mb_strtoupper($state))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\IconColumn::make('finalizado')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-clock')
                    ->falseColor('gray'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListPartidos::route('/'),
            'create' => Pages\CreatePartido::route('/create'),
            'edit' => Pages\EditPartido::route('/{record}/edit'),
        ];
    }
}
