<?php

namespace App\Filament\Resources\Attendances\Schemas;

use App\Models\Employee;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AttendanceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('employee_id')
                    ->label('Employee')
                    ->options(
                        Employee::with('user')
                            ->get()
                            ->pluck('user.name', 'id')
                    )
                    ->searchable()
                    ->preload()
                    ->required(),

                DatePicker::make('date')
                    ->label('Date')
                    ->required(),

                TimePicker::make('check_in')
                    ->label('Check In'),

                TimePicker::make('check_out')
                    ->label('Check Out'),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'Present' => 'Present',
                        'Late' => 'Late',
                        'Absent' => 'Absent',
                        'Leave' => 'Leave',
                    ])
                    ->default('Present')
                    ->required(),

                Textarea::make('notes')
                    ->label('Notes')
                    ->columnSpanFull(),
            ]);
    }
}