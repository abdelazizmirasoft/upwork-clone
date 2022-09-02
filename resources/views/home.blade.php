@extends('layouts.app')
@section('content')
<h3 class="text-3xl font-bold ">
    Hello {{auth()->user()->name}}
</h3>
    @foreach(auth()->user()->likes as $like)
        {{ $like->title }}
    @endforeach

@endsection