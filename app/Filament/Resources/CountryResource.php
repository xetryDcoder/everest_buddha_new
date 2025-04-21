<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CountryResource\Pages;
use Illuminate\Support\Str;
use App\Models\Country;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\{
    TextInput,
    RichEditor,
    FileUpload,
    Grid,
    Section,
};
use Filament\Tables\Columns\TextColumn;


class CountryResource extends Resource
{
    protected static ?string $model = Country::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Basic Info')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->required()
                                ->reactive()
                                ->afterStateUpdated(function (string $state, callable $set) {
                                    $set('slug', Str::slug($state));
                                }),
                        
                            TextInput::make('slug')
                                ->required()
                                ->unique(ignoreRecord: true),
                        ]),

                            RichEditor::make('short_description')
                            ->label('Short Description')
                            ->columnSpanFull()
                            ->required(),

                            RichEditor::make('top_description')
                            ->label('Top Description')
                            ->columnSpanFull()
                            ->required(),

                        RichEditor::make('description')
                            ->label('Full Description')
                            ->columnSpanFull()
                            ->required(),
                    ]),

                Section::make('Images')
                    ->schema([
                        FileUpload::make('banner_photo')
                            ->label('Banner Photo')
                            ->image()
                            ->directory('countries/banner'),

                        Grid::make(2)->schema([
                            FileUpload::make('top_photo_1')
                                ->label('Top Photo 1')
                                ->image()
                                ->directory('countries/top'),

                            FileUpload::make('top_photo_2')
                                ->label('Top Photo 2')
                                ->image()
                                ->directory('countries/top'),
                        ]),

                        FileUpload::make('logo')
                            ->label('Country Logo')
                            ->image()
                            ->directory('countries/logo'),

                        FileUpload::make('sidebar_photo')
                            ->label('Sidebar Photo')
                            ->image()
                            ->directory('countries/sidebar'),

                        Grid::make(2)->schema([
                            FileUpload::make('bottom_photo_1')
                                ->label('Bottom Photo 1')
                                ->image()
                                ->directory('countries/bottom'),

                            FileUpload::make('bottom_photo_2')
                                ->label('Bottom Photo 2')
                                ->image()
                                ->directory('countries/bottom'),
                        ]),
                    ]),

                Section::make('SEO Meta')
                    ->schema([
                        TextInput::make('meta_title')
                            ->maxLength(255),
                        TextInput::make('meta_description')
                            ->maxLength(255),
                        TextInput::make('meta_keywords')
                            ->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('short_description')->limit(30),
                TextColumn::make('slug')->limit(30),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCountries::route('/'),
            'create' => Pages\CreateCountry::route('/create'),
            'edit' => Pages\EditCountry::route('/{record}/edit'),
        ];
    }
}
