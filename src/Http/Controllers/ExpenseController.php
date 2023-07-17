<?php

namespace Azim1993\ExpensePlanner\Http\Controllers;

use App\Http\Controllers\Controller;
use Azim1993\ExpensePlanner\Data\ExpenseTypeEnum;
use Azim1993\ExpensePlanner\Http\Requests\ExpenseRequest;
use Azim1993\ExpensePlanner\Models\Expense;
use Azim1993\ExpensePlanner\Models\MonthlyPlan;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expense::with('monthlyPlan')->paginate();
        return view('planner::expense.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $monthlyPlans = MonthlyPlan::select('id', 'plan_month', 'plan_year')->latest()->get();
        $types = ExpenseTypeEnum::toArrayValues();
        return view('planner::expense.create', compact('monthlyPlans', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpenseRequest $request)
    {
        Expense::create($request->all());
        return redirect()->route('expenses.index')->with(['success' => 'Expense store successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $expense = Expense::with('monthlyPlan')->findOrFail($id);
        return view('planner::expense.show', compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $monthlyPlans = MonthlyPlan::select('id', 'plan_month', 'plan_year')->latest()->get();
        $types = ExpenseTypeEnum::toArrayValues();
        $expense = Expense::with('monthlyPlan')->findOrFail($id);
        return view('planner::expense.edit', compact('expense', 'monthlyPlans', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpenseRequest $request, string $id)
    {
        $expense = Expense::findOrFail($id);
        $expense->update($request->all());
        return redirect()->route('expenses.index')->with(['success' => 'Expense updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();
        return redirect()->route('expenses.index')->with(['success' => 'Expense deleted successfully']);
    }
}
