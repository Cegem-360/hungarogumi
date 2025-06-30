<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Imports\ProductImporter;
use App\Filament\Resources\ProductResource\Pages\CreateProduct;
use App\Filament\Resources\ProductResource\Pages\EditProduct;
use App\Filament\Resources\ProductResource\Pages\ListProducts;
use App\Filament\Resources\ProductResource\Pages\ViewProduct;
use App\Models\Product;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ImportAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('manufacturer_id')
                    ->relationship('manufacturer', 'name'),
                TextInput::make('ean'),
                TextInput::make('sku'),
                TextInput::make('factory_code'),
                TextInput::make('item_name'),
                TextInput::make('width'),
                TextInput::make('aspect_ratio'),
                TextInput::make('structure'),
                TextInput::make('diameter'),
                TextInput::make('li'),
                TextInput::make('si'),
                TextInput::make('bolt_count'),
                TextInput::make('center_bore'),
                TextInput::make('pcd'),
                TextInput::make('et'),
                TextInput::make('consumption'),
                TextInput::make('grip'),
                TextInput::make('noise_level'),
                TextInput::make('noise_value'),
                TextInput::make('weight'),
                TextInput::make('season'),
                TextInput::make('usage'),
                FileUpload::make('main_image')
                    ->image(),
                TextInput::make('min_order_quantity'),
                TextInput::make('pattern_name'),
                FileUpload::make('secondary_image')
                    ->image(),
                TextInput::make('secondary_pattern_name'),
                TextInput::make('item_type_name'),
                TextInput::make('rim_model'),
                TextInput::make('rim_color'),
                TextInput::make('for_winter'),
                TextInput::make('rim_structure'),
                TextInput::make('rim_dedicated'),
                TextInput::make('reinforced'),
                TextInput::make('runflat'),
                TextInput::make('tire_spec_data'),
                TextInput::make('tire_car_data'),
                TextInput::make('url'),
                TextInput::make('retail_price_eur'),
                TextInput::make('wholesale_price_eur'),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('manufacturer.name')
                    ->numeric(),
                TextEntry::make('ean'),
                TextEntry::make('sku'),
                TextEntry::make('factory_code'),
                TextEntry::make('item_name'),
                TextEntry::make('width'),
                TextEntry::make('aspect_ratio'),
                TextEntry::make('structure'),
                TextEntry::make('diameter'),
                TextEntry::make('li'),
                TextEntry::make('si'),
                TextEntry::make('bolt_count'),
                TextEntry::make('center_bore'),
                TextEntry::make('pcd'),
                TextEntry::make('et'),
                TextEntry::make('consumption'),
                TextEntry::make('grip'),
                TextEntry::make('noise_level'),
                TextEntry::make('noise_value'),
                TextEntry::make('weight'),
                TextEntry::make('season'),
                TextEntry::make('usage'),
                ImageEntry::make('main_image'),
                TextEntry::make('min_order_quantity'),
                TextEntry::make('pattern_name'),
                ImageEntry::make('secondary_image'),
                TextEntry::make('secondary_pattern_name'),
                TextEntry::make('item_type_name'),
                TextEntry::make('rim_model'),
                TextEntry::make('rim_color'),
                TextEntry::make('for_winter'),
                TextEntry::make('rim_structure'),
                TextEntry::make('rim_dedicated'),
                TextEntry::make('reinforced'),
                TextEntry::make('runflat'),
                TextEntry::make('tire_spec_data'),
                TextEntry::make('tire_car_data'),
                TextEntry::make('url'),
                TextEntry::make('retail_price_eur'),
                TextEntry::make('wholesale_price_eur'),
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
                TextColumn::make('manufacturer.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ean')
                    ->searchable(),
                TextColumn::make('sku')
                    ->searchable(),
                TextColumn::make('factory_code')
                    ->searchable(),
                TextColumn::make('item_name')
                    ->searchable(),
                TextColumn::make('width')
                    ->searchable(),
                TextColumn::make('aspect_ratio')
                    ->searchable(),
                TextColumn::make('structure')
                    ->searchable(),
                TextColumn::make('diameter')
                    ->searchable(),
                TextColumn::make('li')
                    ->searchable(),
                TextColumn::make('si')
                    ->searchable(),
                TextColumn::make('bolt_count')
                    ->searchable(),
                TextColumn::make('center_bore')
                    ->searchable(),
                TextColumn::make('pcd')
                    ->searchable(),
                TextColumn::make('et')
                    ->searchable(),
                TextColumn::make('consumption')
                    ->searchable(),
                TextColumn::make('grip')
                    ->searchable(),
                TextColumn::make('noise_level')
                    ->searchable(),
                TextColumn::make('noise_value')
                    ->searchable(),
                TextColumn::make('weight')
                    ->searchable(),
                TextColumn::make('season')
                    ->searchable(),
                TextColumn::make('usage')
                    ->searchable(),
                ImageColumn::make('main_image'),
                TextColumn::make('min_order_quantity')
                    ->searchable(),
                TextColumn::make('pattern_name')
                    ->searchable(),
                ImageColumn::make('secondary_image'),
                TextColumn::make('secondary_pattern_name')
                    ->searchable(),
                TextColumn::make('item_type_name')
                    ->searchable(),
                TextColumn::make('rim_model')
                    ->searchable(),
                TextColumn::make('rim_color')
                    ->searchable(),
                TextColumn::make('for_winter')
                    ->searchable(),
                TextColumn::make('rim_structure')
                    ->searchable(),
                TextColumn::make('rim_dedicated')
                    ->searchable(),
                TextColumn::make('reinforced')
                    ->searchable(),
                TextColumn::make('runflat')
                    ->searchable(),
                TextColumn::make('tire_spec_data')
                    ->searchable(),
                TextColumn::make('tire_car_data')
                    ->searchable(),
                TextColumn::make('url')
                    ->searchable(),
                TextColumn::make('retail_price_eur')
                    ->searchable(),
                TextColumn::make('wholesale_price_eur')
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
            ])->headerActions([
                ImportAction::make()->importer(ProductImporter::class),
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
            'index' => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'view' => ViewProduct::route('/{record}'),
            'edit' => EditProduct::route('/{record}/edit'),
        ];
    }
}
