@extends('planner::layout')

@section('content')
    <section class="flex justify-between w-full items-center border-b px-6 pb-4">
        <h3 class="text-xl font-bold">Monthly Plan Create</h3>
        <a href="{{ route('monthly.plans.index') }}" class="bg-gray-700 px-6 py-2 text-white rounded">Back</a>
    </section>
    <div class="px-6 py-4">
        <form action="{{ route('monthly.plans.store') }}" method="post">
            @csrf
            <div class="grid gap-x-8 gap-y-4 grid-cols-3">
                <div class="">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="plan_year">
                        Year
                    </label>
                    <div class="relative">
                        <select name="plan_year" id="plan_year" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline leading-tight focus:outline-none">
                            <option value="">Select Year</option>
                            @for($yearStart = \Carbon\Carbon::now()->year; $yearStart >= 2010; $yearStart--)
                                <option value="{{ $yearStart }}">{{ $yearStart }}</option>
                            @endfor
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
                <div class="">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="plan_month">
                        Month
                    </label>
                    <div class="relative">
                        <select name="plan_month" id="plan_month" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline leading-tight focus:outline-none">
                            <option value="">Select Month</option>
                            @for($monthStart = 1; $monthStart <= 12; $monthStart++)
                                <option value="{{ $monthStart }}">{{ $monthStart }}</option>
                            @endfor
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
                <div></div>
                <div class="">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="income_amount">
                        Total Income
                    </label>
                    <input name="income_amount" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="income_amount" type="number" placeholder="Total Income">
                </div>
                <div class="">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="targeted_expense_amount">
                        Targeted Expense Amount
                    </label>
                    <input name="targeted_expense_amount" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="targeted_expense_amount" type="number" placeholder="Targeted Expense">
                </div>
                <div class="">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="targeted_investment_amount">
                        Targeted Investment Amount
                    </label>
                    <input name="targeted_investment_amount" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="targeted_investment_amount" type="number" placeholder="Targeted Investment">
                </div>
                <div class="col-span-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="note">
                        Note
                    </label>
                    <textarea name="note" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="note" placeholder="Note"></textarea>
                </div>
            </div>
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Create New Monthly Plan
                </button>
            </div>
        </form>
    </div>
@endsection
