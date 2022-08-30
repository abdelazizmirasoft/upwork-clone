@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-green-500 mb-3"> {{ $job->title }}</h1>

        <div class="px-3 py-5 mb-3 shadow-sm hover:shadow-md rounded border-2 border-gray-300">
            <p class="text-md text-gray-800">{{ $job->description }}</p>
            <span class="text-sm text-gray-600">{{ number_format($job->price / 100, 2, '.', ',') }} $</span>
        </div>
@endsection