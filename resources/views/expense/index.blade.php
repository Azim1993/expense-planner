@extends('planner::layout')

@section('content')
    <section class="flex justify-between w-full items-center border-b px-6 pb-4">
        <h3 class="text-xl font-bold">Expenses</h3>
        <a href="{{ route('expenses.create') }}" class="bg-blue-700 px-6 py-2 text-white rounded">Create New</a>
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
            @if($expenses->count() > 0)
                <div class="divide-y">
                    @foreach($expenses as $expense)
                    <div class="flex flex-row py-4 first:pt-0 last:pb-0">
                        <div class="basis-2/12 bg-blue-300 flex justify-center items-center mr-4 border rounded">
                            <p class="font-bold mr-2">{{\Azim1993\ExpensePlanner\Data\MonthEnum::getMonth($expense?->monthlyPlan?->plan_month)}}</p>
                            <p class="text-lg"> - {{$expense?->monthlyPlan?->plan_year }}</p>
                        </div>
                        <div class="basis-9/12">
                            <h3 class="font-bold"> {{ $expense->title }}</h3>
                            <p><strong>Expense Amount: </strong> {{ $expense->expense_amount }}</p>
                            <p><strong>Expense Type: </strong> <span class="px-3 py-1 bg-gray-400 text-white font-bold">{{ $expense->expense_type }}</span></p>
                            <p>{{ $expense->description }}</p>
                        </div>
                        <div class="basis-1/12 ml-4">
                            <a href="{{ route('expenses.show', $expense) }}" class="mb-2 border-2 border-blue-800 py-1 rounded px-4 block w-full text-center hover:bg-blue-800 hover:text-white">View</a>
                            <a href="{{ route('expenses.edit', $expense) }}" class="mb-2 border-2 border-blue-800 py-1 rounded px-4 block w-full text-center hover:bg-blue-800 hover:text-white">Edit</a>
                            <a href="#" onclick="if (confirm('Delete selected item?')){return document.getElementById('delete-monthly-plan-from').submit(); } else { event.preventDefault()}"  class="border-2 border-red-500 py-1 text-red-500 rounded px-4 block w-full text-center hover:bg-red-500 hover:text-white">Delete</a>
                            <form id="delete-monthly-plan-from" class="hidden" method="POST" action="{{ route('expenses.destroy', $expenses) }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                @include('planner::components.pagination', ['data' => $expenses])
            @else
                <p>No Expense added yet</p>
            @endif
        </div>
    </div>
@endsection
