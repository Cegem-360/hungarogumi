<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Enums\ResourceGroup;
use App\Filament\Resources\CategoryResource\Pages\CreateCategory;
use App\Filament\Resources\CategoryResource\Pages\EditCategory;
use App\Filament\Resources\CategoryResource\Pages\ListCategories;
use App\Filament\Resources\CategoryResource\Pages\ViewCategory;
use App\Models\Product\Category;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use UnitEnum;

final class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static UnitEnum|string|null $navigationGroup = ResourceGroup::PRODUCTS;

    protected static ?int $navigationSort = 3;

    protected static ?string $modelLabel = 'Kategoria';

    protected static ?string $pluralLabel = 'Kategoriák';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->live()
                    ->required()
                    ->afterStateUpdated(function ($state, Set $set) {
                        $set('slug', Str::slug($state), language: 'hu');
                    })
                    ->label('Név'),
                TextInput::make('slug')

                    ->required()
                    ->label('Slug'),
                TextInput::make('description')
                    ->label('Leírás'),
                Toggle::make('display')
                    ->label('Megjelenítés'),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Név')
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Leírás'),
                TextColumn::make('display')
                    ->label('Megjelenítés'),
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
            'index' => ListCategories::route('/'),
            'create' => CreateCategory::route('/create'),
            'view' => ViewCategory::route('/{record}'),
            'edit' => EditCategory::route('/{record}/edit'),
        ];
    }
}
