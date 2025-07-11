<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\OrderItemResource\Pages\CreateOrderItem;
use App\Filament\Resources\OrderItemResource\Pages\EditOrderItem;
use App\Filament\Resources\OrderItemResource\Pages\ListOrderItems;
use App\Filament\Resources\OrderItemResource\Pages\ViewOrderItem;
use App\Models\OrderItem;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class OrderItemResource extends BaseResource
{
    protected static ?string $model = OrderItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('order_id')
                    ->relationship('order', 'id')
                    ->required(),
                Select::make('product_id')
                    ->relationship('product', 'id')
                    ->required(),
                TextInput::make('tax_class'),
                TextInput::make('subtotal'),
                TextInput::make('subtotal_tax'),
                TextInput::make('total'),
                TextInput::make('total_tax'),
                TextInput::make('quantity')
                    ->required()
                    ->numeric()
                    ->default(1),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('order.id')
                    ->numeric(),
                TextEntry::make('product.id')
                    ->numeric(),
                TextEntry::make('tax_class'),
                TextEntry::make('subtotal'),
                TextEntry::make('subtotal_tax'),
                TextEntry::make('total'),
                TextEntry::make('total_tax'),
                TextEntry::make('quantity')
                    ->numeric(),
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
                TextColumn::make('order.id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('product.id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tax_class')
                    ->searchable(),
                TextColumn::make('subtotal')
                    ->searchable(),
                TextColumn::make('subtotal_tax')
                    ->searchable(),
                TextColumn::make('total')
                    ->searchable(),
                TextColumn::make('total_tax')
                    ->searchable(),
                TextColumn::make('quantity')
                    ->numeric()
                    ->sortable(),
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
            'index' => ListOrderItems::route('/'),
            'create' => CreateOrderItem::route('/create'),
            'view' => ViewOrderItem::route('/{record}'),
            'edit' => EditOrderItem::route('/{record}/edit'),
        ];
    }
}
