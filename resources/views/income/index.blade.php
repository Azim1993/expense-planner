@extends('planner::layout')

@section('content')
    <section class="flex justify-between w-full items-center border-b px-6 pb-4">
        <h3 class="text-xl font-bold">Monthly Plans</h3>
        <a href="{{ route('monthly.plans.create') }}" class="bg-blue-700 px-6 py-2 text-white rounded">Create New</a>
    </section>
    <div class="">
        @if ($message = Session::get('success'))
            <div class="text-center py-4 lg:px-4">
                <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                    <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
                    <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
                </div>
            </div>
        @endif
        <div class="px-6 py-4">
            @if($monthlyPlans->count() > 0)
                <div class="divide-y">
                    @foreach($monthlyPlans as $monthlyPlan)
                    <div class="flex flex-row py-4 first:pt-0 last:pb-0">
                        <div class="basis-2/12 bg-blue-300 flex justify-center items-center mr-4 border rounded">
                            <p class="font-bold mr-2">{{\Azim1993\ExpensePlanner\Data\MonthEnum::getMonth($monthlyPlan->plan_month)}}</p>
                            <p class="text-lg"> - {{$monthlyPlan->plan_year }}</p>
                        </div>
                        <div class="basis-9/12">
                            <p><strong>Total Income Amount: </strong> {{ $monthlyPlan->income_amount }}</p>
                            <div class="flex mb-4">
                                <p class="mr-6"><strong>Targeted Expense Amount: </strong> {{ $monthlyPlan->targeted_expense_amount }}</p>
                                <p><strong>Targeted Investment Amount: </strong> {{ $monthlyPlan->targeted_investment_amount }}</p>
                            </div>
                            <p>{{ $monthlyPlan->note }}</p>
                        </div>
                        <div class="basis-1/12 ml-4">
                            <a href="{{ route('monthly.plans.show', $monthlyPlan) }}" class="mb-2 border-2 border-blue-800 py-1 rounded px-4 block w-full text-center hover:bg-blue-800 hover:text-white">View</a>
                            <a href="{{ route('monthly.plans.edit', $monthlyPlan) }}" class="mb-2 border-2 border-blue-800 py-1 rounded px-4 block w-full text-center hover:bg-blue-800 hover:text-white">Edit</a>
                            <a href="#" onclick="if (confirm('Delete selected item?')){return document.getElementById('delete-monthly-plan-from').submit(); } else { event.preventDefault()}"  class="border-2 border-red-500 py-1 text-red-500 rounded px-4 block w-full text-center hover:bg-red-500 hover:text-white">Delete</a>
                            <form id="delete-monthly-plan-from" class="hidden" method="POST" action="{{ route('monthly.plans.destroy', $monthlyPlan) }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                @include('planner::components.pagination', ['data' => $monthlyPlans])
            @else
                <p>No Plan added yet</p>
            @endif
        </div>
    </div>
@endsection
