<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages\CreateBlog;
use App\Filament\Resources\BlogResource\Pages\EditBlog;
use App\Filament\Resources\BlogResource\Pages\ListBlogs;
use App\Filament\Resources\BlogResource\Pages\ViewBlog;
use App\Models\Blog;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class BlogResource extends BaseResource
{
    protected static ?string $model = Blog::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                Textarea::make('content')
                    ->columnSpanFull(),
                TextInput::make('slug'),
                TextInput::make('link'),
                TextInput::make('featured_media'),
                TextInput::make('author'),
                TextInput::make('comment_status'),
                TextInput::make('ping_status'),
                Toggle::make('sticky'),
                TextInput::make('format'),
                TextInput::make('status'),
                TextInput::make('type'),
                DateTimePicker::make('date'),
                DateTimePicker::make('date_gmt'),
                DateTimePicker::make('modified'),
                DateTimePicker::make('modified_gmt'),
                TextInput::make('template'),
                Textarea::make('excerpt')
                    ->columnSpanFull(),
                TextInput::make('guid'),
                TextInput::make('meta'),
                TextInput::make('categories'),
                TextInput::make('tags'),
                TextInput::make('yoast_head'),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('slug'),
                TextEntry::make('link'),
                TextEntry::make('featured_media'),
                TextEntry::make('author'),
                TextEntry::make('comment_status'),
                TextEntry::make('ping_status'),
                IconEntry::make('sticky')
                    ->boolean(),
                TextEntry::make('format'),
                TextEntry::make('status'),
                TextEntry::make('type'),
                TextEntry::make('date')
                    ->dateTime(),
                TextEntry::make('date_gmt')
                    ->dateTime(),
                TextEntry::make('modified')
                    ->dateTime(),
                TextEntry::make('modified_gmt')
                    ->dateTime(),
                TextEntry::make('template'),
                TextEntry::make('guid'),
                TextEntry::make('meta'),
                TextEntry::make('categories'),
                TextEntry::make('tags'),
                TextEntry::make('yoast_head'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable(),
                TextColumn::make('link')
                    ->searchable(),
                TextColumn::make('featured_media')
                    ->searchable(),
                TextColumn::make('author')
                    ->searchable(),
                TextColumn::make('comment_status')
                    ->searchable(),
                TextColumn::make('ping_status')
                    ->searchable(),
                IconColumn::make('sticky')
                    ->boolean(),
                TextColumn::make('format')
                    ->searchable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('type')
                    ->searchable(),
                TextColumn::make('date')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('date_gmt')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('modified')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('modified_gmt')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('template')
                    ->searchable(),
                TextColumn::make('guid')
                    ->searchable(),
                TextColumn::make('meta')
                    ->searchable(),
                TextColumn::make('categories')
                    ->searchable(),
                TextColumn::make('tags')
                    ->searchable(),
                TextColumn::make('yoast_head')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => ListBlogs::route('/'),
            'create' => CreateBlog::route('/create'),
            'view' => ViewBlog::route('/{record}'),
            'edit' => EditBlog::route('/{record}/edit'),
        ];
    }
}
