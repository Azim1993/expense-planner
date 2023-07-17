@extends('planner::layout')

@section('content')
    <section class="flex justify-between w-full items-center border-b px-6 pb-4">
        <h3 class="text-xl font-bold">Monthly Plan Details</h3>
        <a href="{{ route('monthly.plans.index') }}" class="bg-gray-700 px-6 py-2 text-white rounded">Back</a>
    </section>
    <div class="px-6 py-4">
        <h2 class="text-2xl font-bold">{{\Azim1993\ExpensePlanner\Data\MonthEnum::getMonth($monthlyPlan->plan_month)}} - {{ $monthlyPlan->plan_year }}</h2>
        <hr class="pb-2 mt-2">
        <p><strong>Total Income Amount: </strong> {{ $monthlyPlan->income_amount }}</p>
        <div class="flex mb-4">
            <p class="mr-6"><strong>Targeted Expense Amount: </strong> {{ $monthlyPlan->targeted_expense_amount }}</p>
            <p><strong>Targeted Investment Amount: </strong> {{ $monthlyPlan->targeted_investment_amount }}</p>
        </div>
        <p>{{ $monthlyPlan->note }}</p>
        <div class="flex my-4">
            <a href="{{ route('monthly.plans.edit', $monthlyPlan) }}" class="mr-2 border-2 border-blue-800 py-1 rounded px-4 block text-center hover:bg-blue-800 hover:text-white">Edit</a>
            <a href="#" onclick="if (confirm('Delete selected item?')){return document.getElementById('delete-monthly-plan-from').submit(); } else { event.preventDefault()}"  class="border-2 border-red-500 py-1 text-red-500 rounded px-4 block text-center hover:bg-red-500 hover:text-white">Delete</a>
            <form id="delete-monthly-plan-from" class="hidden" method="POST" action="{{ route('monthly.plans.destroy', $monthlyPlan) }}">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endsection
