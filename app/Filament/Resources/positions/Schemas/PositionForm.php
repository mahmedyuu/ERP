<?php

namespace App\Filament\Resources\Positions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class PositionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Position Information')
                    ->icon(Heroicon::UserGroup)
                    ->description ('Position Information.')
                    ->columns(2)
                    ->columnSpan(3)
                    ->schema([
                        TextInput::make('name')
                            ->columnSpanFull()
                            ->required(),
                        TextInput::make('description'),
                        TextInput::make('allowance'),
                    ]),
                // TextInput::make('name')
                //     ->required(),
                // TextInput::make('description'),
                // TextInput::make('allowance'),
            ])->columns(3);
    }
}
