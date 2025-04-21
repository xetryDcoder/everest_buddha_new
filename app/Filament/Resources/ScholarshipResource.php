<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScholarshipResource\Pages;
use App\Filament\Resources\ScholarshipResource\RelationManagers;
use App\Models\Scholarship;
use Filament\Forms;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScholarshipResource extends Resource
{
    protected static ?string $model = Scholarship::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form
        ->schema([ // <== You need this array to wrap the Section!
            Section::make('General Information')
                ->schema([
                    TextInput::make('name')
                                ->required()
                                ->reactive()
                                ->afterStateUpdated(function (string $state, callable $set) {
                                    $set('slug', Str::slug($state));
                                }),
                        
                            TextInput::make('slug')
                                ->required()
                                ->unique(ignoreRecord: true),
                    FileUpload::make('cover')
                        ->image()
                        ->directory('scholarship_covers'),
                    TextInput::make('author'),
                    RichEditor::make('description')
                        ->label('Description')
                        ->columnSpanFull()
                        ->required(),
                    FileUpload::make('end_photo')
                        ->image()
                        ->directory('scholarship_photos'),
                    TagsInput::make('tags'),

                    Section::make('SEO Meta')
                        ->schema([
                            TextInput::make('meta_title')
                                ->maxLength(255),
                            TextInput::make('meta_description')
                                ->maxLength(255),
                            TextInput::make('meta_keywords')
                                ->maxLength(255),
                        ]),
                ]),
        ]);
}

    

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('author')
                ->sortable(),


            Tables\Columns\TagsColumn::make('tags')
                ->separator(','),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->label('Created')
                ->sortable(),

            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->label('Updated')
                ->sortable(),
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
            'index' => Pages\ListScholarships::route('/'),
            'create' => Pages\CreateScholarship::route('/create'),
            'edit' => Pages\EditScholarship::route('/{record}/edit'),
        ];
    }
}
