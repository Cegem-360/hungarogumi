<?php

declare(strict_types=1);

namespace App\Providers;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Infolists\Components\TextEntry;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TextInput::configureUsing(function (TextInput $component): void {
            $component->translateLabel();
        });
        Select::configureUsing(function (Select $component): void {
            $component->translateLabel();
        });
        Toggle::configureUsing(function (Toggle $component): void {
            $component->translateLabel();
        });
        TextEntry::configureUsing(function (TextEntry $component): void {
            $component->translateLabel();
        });
        TextColumn::configureUsing(function (TextColumn $component): void {
            $component->translateLabel();
        });
        IconColumn::configureUsing(function (IconColumn $component): void {
            $component->translateLabel();
        });

        FileUpload::configureUsing(function (FileUpload $component): void {
            $component->translateLabel();
        });

        RichEditor::configureUsing(function (RichEditor $component): void {
            $component->translateLabel();
        });

    }
}
