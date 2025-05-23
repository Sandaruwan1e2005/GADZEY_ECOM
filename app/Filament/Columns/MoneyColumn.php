<?php
namespace App\Filament\Columns;

use Filament\Tables\Columns\TextColumn;

class MoneyColumn extends TextColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->formatStateUsing(function ($state) {
            return 'Rs. ' . number_format($state, 2);
        });
    }
}