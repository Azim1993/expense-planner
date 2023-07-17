<?php

namespace Azim1993\ExpensePlanner\Data;

enum MonthEnum: int
{
    case January = 1;
    case February = 2;
    case March = 3;
    case April = 4;
    case May = 5;
    case Jun = 6;
    case July = 7;
    case August = 8;
    case September = 9;
    case October = 10;
    case November = 11;
    case December = 12;

    public static function getMonth(int $monthNumber): string
    {
        foreach (self::cases() as $month) {
            if ($month->value == $monthNumber)
                return $month->name;
        }
        throw new \ValueError('Invalid Month value');
    }
}
