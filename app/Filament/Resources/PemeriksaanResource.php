<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemeriksaanResource\Pages;
use App\Filament\Resources\PemeriksaanResource\RelationManagers;
use App\Models\Pemeriksaan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PemeriksaanResource extends Resource
{
    protected static ?string $model = Pemeriksaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_pasien')
					
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama_pemeriksaan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('hasil_pemeriksaan')
                    ->required()
                    ->columnSpanFull(),
                //Forms\Components\TextInput::make('gambar')
                //    ->required()
                //    ->maxLength(255),
				
				Forms\Components\FileUpload::make('gambar')
					->image()
					->imageEditor(),
				
                //Forms\Components\Textarea::make('lampiran')
                //    ->required()
                //    ->columnSpanFull(),
				Forms\Components\FileUpload::make('lampiran')
					->multiple()
					->acceptedFileTypes(['application/pdf'])
					->openable()
					->storeFileNamesIn('lampiran_nama'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_pasien')
					->sortable()
					->searchable()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_pemeriksaan')
                    ->searchable(),
                //Tables\Columns\TextColumn::make('gambar')
                //    ->searchable(),
				Tables\Columns\ImageColumn::make('gambar'),
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
            'index' => Pages\ListPemeriksaans::route('/'),
            'create' => Pages\CreatePemeriksaan::route('/create'),
            'edit' => Pages\EditPemeriksaan::route('/{record}/edit'),
        ];
    }
}
