<?php

namespace Azim1993\ExpensePlanner\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class MonthlyPlanRequest extends FormRequest
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
            'plan_month' => 'required|numeric|min:1|max:12',
            'plan_year' => 'required|numeric|min:2010|max:'. Carbon::now()->year,
            'income_amount' => 'required',
            'targeted_expense_amount' => 'nullable',
            'targeted_investment_amount' => 'nullable',
            'note' => 'nullable'
        ];
    }
}
