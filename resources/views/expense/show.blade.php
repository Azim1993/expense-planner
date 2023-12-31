@extends('planner::layout')

@section('content')
    <section class="flex justify-between w-full items-center border-b px-6 pb-4">
        <h3 class="text-xl font-bold">Expense Details</h3>
        <a href="{{ route('expenses.index') }}" class="bg-gray-700 px-6 py-2 text-white rounded">Back</a>
    </section>
    <div class="px-6 py-4">
        <h2 class="text-2xl font-bold">{{\Azim1993\ExpensePlanner\Data\MonthEnum::getMonth($expense->monthlyPlan->plan_month)}} - {{ $expense->monthlyPlan->plan_year }}</h2>
        <hr class="pb-2 mt-2">
        <p><strong>Title: </strong> {{ $expense->title }}</p>
        <p><strong>Expense Amount: </strong> {{ $expense->expense_amount }}</p>
        <p><strong>Expense Type: </strong> <span class="px-3 py-1 bg-gray-400 text-white font-bold rounded-lg">{{ $expense->expense_type }}</span></p>
        <p><strong>Description: </strong>{{ $expense->description }}</p>
        <div class="flex my-4">
            <a href="{{ route('expenses.edit', $expense) }}" class="mr-2 border-2 border-blue-800 py-1 rounded px-4 block text-center hover:bg-blue-800 hover:text-white">Edit</a>
            <a href="#" onclick="if (confirm('Delete selected item?')){return document.getElementById('delete-expense-from').submit(); } else { event.preventDefault()}"  class="border-2 border-red-500 py-1 text-red-500 rounded px-4 block text-center hover:bg-red-500 hover:text-white">Delete</a>
            <form id="delete-expense-from" class="hidden" method="POST" action="{{ route('expenses.destroy', $expense) }}">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endsection
