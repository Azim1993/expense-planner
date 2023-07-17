<?php

namespace Azim1993\ExpensePlanner\Http\Requests;

use Azim1993\ExpensePlanner\Data\ExpenseTypeEnum;
use Azim1993\ExpensePlanner\Models\MonthlyPlan;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ExpenseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'monthly_plan_id' => [ 'required', Rule::exists((new MonthlyPlan)->getTable(), 'id')],
            'title' => 'required|string|max: 225',
            'description' => 'nullable',
            'expense_amount' => 'required|numeric',
            'expense_type' => ['required', Rule::in(ExpenseTypeEnum::toArrayValues())]
        ];
    }
}
