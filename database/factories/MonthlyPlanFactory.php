<?php

namespace Azim1993\ExpensePlanner\Factory;

use Azim1993\ExpensePlanner\Models\MonthlyPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MonthlyPlanFactory extends Factory
{
    protected $model = MonthlyPlan::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plan_month' => fake()->month,
            'plan_year' => fake()->year,
            'income_amount' => rand(50000, 100000),
            'targeted_expense_amount' => rand(10000, 50000),
            'targeted_investment_amount' => rand(5000, 10000),
            'note' => fake()->text()
        ];
    }
}
