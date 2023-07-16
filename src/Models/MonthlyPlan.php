<?php

namespace Azim1993\ExpensePlanner\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_month',
        'plan_year',
        'income_amount',
        'targeted_expense_amount',
        'targeted_investment_amount',
        'note'
    ];
}
