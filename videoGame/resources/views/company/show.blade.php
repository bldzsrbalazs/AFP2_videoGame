@extends('layouts.main')

@section('content')
    <div class="row">
        @foreach ($companygames as $game)
            <div class="col-3 mb-5">
                <div class="card h-100">
                    <img src="{{ $game->cover_image }}" class="card-img-top" alt="{{ $game->cover_image }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->name }}</h5>
                        <p class="card-text">{{ $game->smalldesc }}</p>
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('game.details',$game->id) }}" class="btn btn-primary form-control">{{ __('Details') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <hr>
    <div class="d-flex justify-content-center">
        {{ $companygames->links() }}
    </div>
@endsection
