<?php

namespace Azim1993\ExpensePlanner\Factory;

use Azim1993\ExpensePlanner\Data\ExpenseTypeEnum;
use Azim1993\ExpensePlanner\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ExpenseFactory extends Factory
{
    protected $model = Expense::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'monthly_plan_id' => null,
            'title' => fake()->title,
            'description' => fake()->text,
            'expense_amount' => rand(100, 5000),
            'expense_type' => fake()->randomElement(ExpenseTypeEnum::toArrayValues())
        ];
    }
}
