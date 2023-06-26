@extends('layouts.main')
@section('content')
    <h3 class="text-center">Edit Game</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('game.update', $game) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $game->name }}" required>
        </div>

        <div class="form-group">
            <label for="smalldesc">Small Description:</label>
            <textarea class="form-control" id="smalldesc" name="smalldesc" required>{{ $game->smalldesc }}</textarea>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required>{{ $game->description }}</textarea>
        </div>

        <!-- Add other fields and relationships if needed -->

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
@endsection
