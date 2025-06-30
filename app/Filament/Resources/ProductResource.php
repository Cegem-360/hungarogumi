<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Models\Product;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Resources\Form;
use Filament\Forms;
use Filament\Tables;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('manufacturer_id')
                    ->relationship('manufacturer', 'name')
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('ean'),
                Forms\Components\TextInput::make('item_number'),
                Forms\Components\TextInput::make('factory_code'),
                Forms\Components\TextInput::make('item_name'),
                Forms\Components\TextInput::make('width'),
                Forms\Components\TextInput::make('aspect_ratio'),
                Forms\Components\TextInput::make('structure'),
                Forms\Components\TextInput::make('diameter'),
                Forms\Components\TextInput::make('li'),
                Forms\Components\TextInput::make('si'),
                Forms\Components\TextInput::make('bolt_count'),
                Forms\Components\TextInput::make('center_bore'),
                Forms\Components\TextInput::make('pcd'),
                Forms\Components\TextInput::make('et'),
                Forms\Components\TextInput::make('consumption'),
                Forms\Components\TextInput::make('grip'),
                Forms\Components\TextInput::make('noise_level'),
                Forms\Components\TextInput::make('noise_value'),
                Forms\Components\TextInput::make('weight'),
                Forms\Components\TextInput::make('season'),
                Forms\Components\TextInput::make('usage'),
                Forms\Components\TextInput::make('main_image'),
                Forms\Components\TextInput::make('min_order_quantity'),
                Forms\Components\TextInput::make('pattern_name'),
                Forms\Components\TextInput::make('secondary_image'),
                Forms\Components\TextInput::make('secondary_pattern_name'),
                Forms\Components\TextInput::make('item_type_name'),
                Forms\Components\TextInput::make('rim_model'),
                Forms\Components\TextInput::make('rim_color'),
                Forms\Components\TextInput::make('for_winter'),
                Forms\Components\TextInput::make('rim_structure'),
                Forms\Components\TextInput::make('rim_dedicated'),
                Forms\Components\TextInput::make('reinforced'),
                Forms\Components\TextInput::make('runflat'),
                Forms\Components\TextInput::make('tire_spec_data'),
                Forms\Components\TextInput::make('tire_car_data'),
                Forms\Components\TextInput::make('url'),
                Forms\Components\TextInput::make('retail_price_eur'),
                Forms\Components\TextInput::make('wholesale_price_eur'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('manufacturer.name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('ean')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('item_number')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('item_name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('width'),
                Tables\Columns\TextColumn::make('diameter'),
                Tables\Columns\TextColumn::make('season'),
                Tables\Columns\TextColumn::make('retail_price_eur'),
                Tables\Columns\TextColumn::make('wholesale_price_eur'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
