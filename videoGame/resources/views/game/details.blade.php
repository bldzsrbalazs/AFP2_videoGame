@extends('layouts.main')
@section('content')
<div class = "container col-8" >
    <h1 class='disply-1'> {{ $game->name }} </h1>
    <p> <a class="btn btn-sm btn-secondary" href="{{ route('game.all') }}">{{ __('Games') }}
            {{ $game->topic }} </a> {{ $game->created_at->diffForHumans() }}
    </p>
    @if(Auth::user())
    <p>

        {{ __('Users played') }}: {{ count($game->played) }}
        {{!$game->played->contains(Auth::user()->id) ? "" : "(with you)"}}

    </p>
    @endif
    <div class="mb-3">
        <p>
                Information about the game:
                <br>
                {{ $game->description }}

        </p>
        @if(Auth::user())
        <form action="{{ route('game.isplayed', $game) }}" method="post">
            @csrf
            <button name="seen" value="1" class="mb-3 btn
            {{ $game->played->contains(Auth::user()->id) ? "btn-outline-danger" : "btn-outline-success" }}">
            {{ $game->played->contains(Auth::user()->id) ? "I haven't played it yet" : "I already played it" }}
            </button>
        </form>
        @endif
        @if(Auth::user())
        @if(Auth::user()->isAdmin())
            <form action="{{ route('game.edit', $game) }}" method="get">
                @csrf
             <button name="seen" value="1" class="btn btn-outline-warning"> {{ __('Edit') }}</button>
          </form>
          @endif
          @endif
    </div>
</div>
@endsection
