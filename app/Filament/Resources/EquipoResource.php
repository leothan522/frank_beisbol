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
                    ->label('Nombre Oficial')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mini')
                    ->label('Nombre Corto')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(12),
                Forms\Components\TextInput::make('estadio')
                    ->label('Sede (Estadio)')
                    ->required(),
                Forms\Components\DatePicker::make('fundacion')
                    ->label('Fundación'),
                Forms\Components\TextInput::make('presidente')
                    ->maxLength(255),
                Forms\Components\TextInput::make('manager')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_logo')
                    ->label('Logo del equipo')
                    ->image()
                    ->imageEditor()
                    ->maxSize(2048)
                    ->directory('equipos-logos'),
                Forms\Components\FileUpload::make('image_estadio')
                    ->label('Imagen del Estadio')
                    ->image()
                    ->imageEditor()
                    ->maxSize(2048)
                    ->directory('equipos-estadios'),
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
                    ->label('Nombre Oficial')
                    ->formatStateUsing(fn (string $state) => mb_strtoupper($state))
                    ->searchable(),
                Tables\Columns\TextColumn::make('mini')
                    ->label('Nombre Corto')
                    ->formatStateUsing(fn (string $state) => mb_strtoupper($state))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_logo')
                    ->label('Imagen Logo')
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('fundacion')
                    ->label('Funcación')
                    ->date('d/m/Y')
                    ->alignCenter()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\IconColumn::make('activo')
                    ->boolean()
                    ->alignCenter(),
                /*Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),*/
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
