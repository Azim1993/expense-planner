<?php

namespace Azim1993\ExpensePlanner\Http\Controllers;

use App\Http\Controllers\Controller;
use Azim1993\ExpensePlanner\Http\Requests\MonthlyPlanRequest;
use Azim1993\ExpensePlanner\Models\MonthlyPlan;
use Illuminate\Http\Request;

class MonthlyPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monthlyPlans = MonthlyPlan::latest()->paginate();
        return view('planner::income.index', compact('monthlyPlans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('planner::income.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MonthlyPlanRequest $request)
    {
        MonthlyPlan::create($request->all());
        return redirect()->route('monthly.plans.index')->with(['success' => 'Monthly plan created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Sign In
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
