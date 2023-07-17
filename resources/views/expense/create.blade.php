@extends('planner::layout')

@section('content')
    <section class="flex justify-between w-full items-center border-b px-6 pb-4">
        <h3 class="text-xl font-bold">Add New Exponse</h3>
        <a href="{{ route('expenses.index') }}" class="bg-gray-700 px-6 py-2 text-white rounded">Back</a>
    </section>
    <div class="px-6 py-4">
        @if(isset($errors) && $errors->any())
            @foreach ($errors->all() as $error)
                <p class="text-bold py-1 text-red-500">{{ $error }}</p>
            @endforeach
        @endif
        <form action="{{ route('expenses.store') }}" method="post">
            @csrf
            <div class="grid gap-x-8 gap-y-4 grid-cols-3">
                <div class="">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="monthly_plan_id">
                        Monthly Plan
                    </label>
                    <div class="relative">
                        <select name="monthly_plan_id" id="monthly_plan_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline leading-tight focus:outline-none">
                            <option value="">Select Monthly Plan</option>
                            @foreach($monthlyPlans as $monthlyPlan)
                                <option value="{{ $monthlyPlan->id }}">{{ $monthlyPlan->plan_month . ' - '. $monthlyPlan->plan_year }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
                <div class="">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="expense_type">
                        Expense Type
                    </label>
                    <div class="relative">
                        <select name="expense_type" id="expense_type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline leading-tight focus:outline-none">
                            <option value="">Select Type</option>
                            @foreach($types as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
                <div></div>
                <div class="col-span-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                        Title
                    </label>
                    <input name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Title">
                </div>
                <div></div>
                <div class="col-span-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="expense_amount">
                        Expense Income
                    </label>
                    <input name="expense_amount" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="expense_amount" type="number" placeholder="Expense Amount">
                </div>

                <div class="col-span-2">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" placeholder="Description"></textarea>
                </div>
            </div>
            <div></div>
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Store New Expense
                </button>
            </div>
        </form>
    </div>
@endsection
