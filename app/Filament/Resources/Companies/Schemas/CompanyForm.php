<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;


class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Company Information')
                    // ->icon(Heroicon::BuildingOffice2)
                    ->description ('Please provide the necessary information about your company.')
                    ->columns(2)
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('name')
                            ->columnSpanFull()
                            ->required(),
                        TextArea::make('address')
                            ->columnSpanFull()
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        TextInput::make('phone_number')
                            ->tel()
                            ->required(),
                    ]),
                Section::make('Company Logo')
                    ->description('Upload your company logo. Accepted formats: PNG, JPG, JPEG..')
                    ->columns(1)
                    ->schema([
                        FileUpload::make('logo')
                            ->image()
                            ->disk('public')
                            ->directory('logos')
                            ->visibility('public'),
                        ]),


            ])->columns(3);
    }
}
