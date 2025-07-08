<?php

namespace App\Filament\Resources;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\IconEntry;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\OrderResource\Pages\ListOrders;
use App\Filament\Resources\OrderResource\Pages\CreateOrder;
use App\Filament\Resources\OrderResource\Pages\ViewOrder;
use App\Filament\Resources\OrderResource\Pages\EditOrder;
use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use BackedEnum;
use Filament\Actions;
use Filament\Forms;
use Filament\Infolists;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables;
use Filament\Tables\Table;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name'),
                TextInput::make('payment_method')
                    ->required()
                    ->default('bacs'),
                TextInput::make('payment_method_title')
                    ->required()
                    ->default('Bank Transfer'),
                Toggle::make('set_paid')
                    ->required(),
                TextInput::make('billing_first_name'),
                TextInput::make('billing_last_name'),
                TextInput::make('billing_address_1'),
                TextInput::make('billing_address_2'),
                TextInput::make('billing_city'),
                TextInput::make('billing_state'),
                TextInput::make('billing_postcode'),
                TextInput::make('billing_country'),
                TextInput::make('billing_email')
                    ->email(),
                TextInput::make('billing_phone')
                    ->tel(),
                TextInput::make('billing_vat_number'),
                TextInput::make('billing_company_name'),
                TextInput::make('billing_company_office'),
                TextInput::make('shipping_first_name'),
                TextInput::make('shipping_last_name'),
                TextInput::make('shipping_address_1'),
                TextInput::make('shipping_address_2'),
                TextInput::make('shipping_city'),
                TextInput::make('shipping_state'),
                TextInput::make('shipping_postcode'),
                TextInput::make('shipping_country'),
                TextInput::make('shipping_tracking_number')
                    ->required()
                    ->default('null'),
                TextInput::make('shipping_lines_method_id')
                    ->required()
                    ->default('flat_rate'),
                TextInput::make('shipping_lines_method_title')
                    ->required()
                    ->default('Flat Rate'),
                TextInput::make('shipping_lines_total')
                    ->required()
                    ->default('0'),
                TextInput::make('order_key'),
                TextInput::make('order_status')
                    ->required()
                    ->default('pending'),
                TextInput::make('order_currency')
                    ->required(),
                TextInput::make('shipping_cost')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user.name')
                    ->numeric(),
                TextEntry::make('payment_method'),
                TextEntry::make('payment_method_title'),
                IconEntry::make('set_paid')
                    ->boolean(),
                TextEntry::make('billing_first_name'),
                TextEntry::make('billing_last_name'),
                TextEntry::make('billing_address_1'),
                TextEntry::make('billing_address_2'),
                TextEntry::make('billing_city'),
                TextEntry::make('billing_state'),
                TextEntry::make('billing_postcode'),
                TextEntry::make('billing_country'),
                TextEntry::make('billing_email'),
                TextEntry::make('billing_phone'),
                TextEntry::make('billing_vat_number'),
                TextEntry::make('billing_company_name'),
                TextEntry::make('billing_company_office'),
                TextEntry::make('shipping_first_name'),
                TextEntry::make('shipping_last_name'),
                TextEntry::make('shipping_address_1'),
                TextEntry::make('shipping_address_2'),
                TextEntry::make('shipping_city'),
                TextEntry::make('shipping_state'),
                TextEntry::make('shipping_postcode'),
                TextEntry::make('shipping_country'),
                TextEntry::make('shipping_tracking_number'),
                TextEntry::make('shipping_lines_method_id'),
                TextEntry::make('shipping_lines_method_title'),
                TextEntry::make('shipping_lines_total'),
                TextEntry::make('order_key'),
                TextEntry::make('order_status'),
                TextEntry::make('order_currency'),
                TextEntry::make('shipping_cost')
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
                TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('payment_method')
                    ->searchable(),
                TextColumn::make('payment_method_title')
                    ->searchable(),
                IconColumn::make('set_paid')
                    ->boolean(),
                TextColumn::make('billing_first_name')
                    ->searchable(),
                TextColumn::make('billing_last_name')
                    ->searchable(),
                TextColumn::make('billing_address_1')
                    ->searchable(),
                TextColumn::make('billing_address_2')
                    ->searchable(),
                TextColumn::make('billing_city')
                    ->searchable(),
                TextColumn::make('billing_state')
                    ->searchable(),
                TextColumn::make('billing_postcode')
                    ->searchable(),
                TextColumn::make('billing_country')
                    ->searchable(),
                TextColumn::make('billing_email')
                    ->searchable(),
                TextColumn::make('billing_phone')
                    ->searchable(),
                TextColumn::make('billing_vat_number')
                    ->searchable(),
                TextColumn::make('billing_company_name')
                    ->searchable(),
                TextColumn::make('billing_company_office')
                    ->searchable(),
                TextColumn::make('shipping_first_name')
                    ->searchable(),
                TextColumn::make('shipping_last_name')
                    ->searchable(),
                TextColumn::make('shipping_address_1')
                    ->searchable(),
                TextColumn::make('shipping_address_2')
                    ->searchable(),
                TextColumn::make('shipping_city')
                    ->searchable(),
                TextColumn::make('shipping_state')
                    ->searchable(),
                TextColumn::make('shipping_postcode')
                    ->searchable(),
                TextColumn::make('shipping_country')
                    ->searchable(),
                TextColumn::make('shipping_tracking_number')
                    ->searchable(),
                TextColumn::make('shipping_lines_method_id')
                    ->searchable(),
                TextColumn::make('shipping_lines_method_title')
                    ->searchable(),
                TextColumn::make('shipping_lines_total')
                    ->searchable(),
                TextColumn::make('order_key')
                    ->searchable(),
                TextColumn::make('order_status')
                    ->searchable(),
                TextColumn::make('order_currency')
                    ->searchable(),
                TextColumn::make('shipping_cost')
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
            'index' => ListOrders::route('/'),
            'create' => CreateOrder::route('/create'),
            'view' => ViewOrder::route('/{record}'),
            'edit' => EditOrder::route('/{record}/edit'),
        ];
    }
}
