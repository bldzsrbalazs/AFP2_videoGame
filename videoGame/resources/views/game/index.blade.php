@extends('layouts.main')
<style>
    .imageSize {
  width: 250px; /* vagy más méretet adhatsz meg */
  height: auto; /* az aspect ratio megtartásához */
  margin: auto
}
</style>
@section('content')
    <div class="row">
        @foreach ($games as $game)
            <div class="col-3 mb-5">
                <div class="card h-100">
                    <img src="{{ $game->cover_image }}" class="imageSize" alt="{{ $game->cover_image }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->name }}</h5>
                        <p class="card-text">{{ $game->smalldesc }}</p>
                        <div class="row">

                            @foreach ($game->topics as $topic)

                                <div class="col-4">
                                    <a  href="{{ route('game.topic',$topic->id) }}" class="btn btn-sm btn-outline-warning m-1 mb-2 mb-2">{{ $topic->name }}</a>
                                </div>
                            @endforeach
                        </div>
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
        {{ $games->links() }}
    </div>
@endsection
