@extends('layouts.app')

@section('content')
  <h1 class="text-3xl text-green-500 mb-5">Your Messages</h2>
  @foreach($conversations as $conversation)
  <a href="{{ route('conversation.show', $conversation->id) }}" class="focus:outline-none">
    <div class="flex items-center justify-between px-3 py-10 mb-3 shadow-md rounded mb-3 border-2 hover:border-green-300 cursor-pointer">
          <p class="font-semibold">{{ Illuminate\Support\Str::limit($conversation->messages->last()->content, 50) }}
          </p>
          <p class="font-thin text-gray-500">sent by <strong>{{ auth()->user()->id === $conversation->messages->last()->user->id ? 'you' : $conversation->messages->last()->user->name }}</strong> {{ $conversation->messages->last()->created_at->diffForHumans() }}</p>
    </div>
  </a>
  @endforeach
@endsection