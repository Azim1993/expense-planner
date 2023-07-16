<?php

namespace Azim1993\ExpensePlanner\Http\Controllers;

use App\Http\Controllers\Controller;
use Azim1993\ExpensePlanner\Http\Requests\MonthlyPlanRequest;
use Azim1993\ExpensePlanner\Models\MonthlyPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MonthlyPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('planner::income.index');
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
        Session::flash('success', 'Monthly plan created successfully');
        return redirect()->route('monthly.plans.index');
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
