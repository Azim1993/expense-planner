@extends('planner::layout')

@section('content')
    <section class="flex justify-between w-full items-center border-b px-6 pb-4">
        <h3 class="text-xl font-bold">Monthly Plans</h3>
        <a href="{{ route('monthly.plans.create') }}" class="bg-blue-700 px-6 py-2 text-white rounded">Create New</a>
    </section>
@endsection
