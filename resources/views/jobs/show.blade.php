@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-green-500 mb-3"> {{ $job->title }}</h1>

        <div class="px-3 py-5 mb-3 shadow-sm hover:shadow-md rounded border-2 border-gray-300">
            <p clss="text-md text-gray-800">{{ $job->description }}</p>
            <span class="text-sm text-gray-600">{{ number_format($job->price / 100, 2, '.', ',') }} $</span>
        </div>

        <section x-data="{open: false}">
            <a href="#" class="text-green-500" @click="open = !open"> Click here to apply fo this job</a>
            <form x-show="open" x-cloak method="POST" action="{{ route('proposals.store', $job) }}">
                @csrf
                <textarea class="p-3 font-thin border w-full max-w-lg" name="content"></textarea>
                <button type="submit" class="block bg-green-700 text-white px-3 py-2 mt-3">Apply</button>
            </form>
        </section>
@endsection