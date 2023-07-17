<?php

namespace Azim1993\ExpensePlanner\Data;

enum ExpenseTypeEnum: string
{
    case DAILY_EXPENSE = 'daily_expense';
    case INVEST = 'investment';
    case EMERGENCY = 'emergency';

    public static function toArrayValues(): array
    {
        return [
            self::DAILY_EXPENSE->value,
            self::INVEST->value,
            self::EMERGENCY->value
        ];
    }
}
