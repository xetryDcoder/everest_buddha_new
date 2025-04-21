<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use Filament\Forms;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TagsColumn;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text'; // Blog Icon

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General Information')
                    ->schema([
                        TextInput::make('title')
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
                            ->directory('blog_covers'),
                        RichEditor::make('body')
                            ->label('Content')
                            ->required()
                            ->columnSpanFull(),
                        TagsInput::make('tags'),
                    ]),
                
                Section::make('SEO Meta')
                    ->schema([
                        TextInput::make('meta_title')->maxLength(255),
                        TextInput::make('meta_description')->maxLength(255),
                        TextInput::make('meta_keywords')->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TagsColumn::make('tags')
                    ->separator(','),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created'),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->label('Updated'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
