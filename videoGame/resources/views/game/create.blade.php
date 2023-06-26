@extends('layouts.main')
@section('content')
    <h3 class="text-center">Add New Game</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('game.create') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="smalldesc">Small description:</label>
            <textarea class="form-control" id="smalldesc" name="smalldesc" required></textarea>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="cover">Cover:</label>
            <input type="file" class="form-control" id="cover" name="cover" required>
        </div>
        <div class="form-group">
            <label for="topics">Categories:</label>
            <select multiple class="form-control" id="topics" name="topics[]">
                @foreach($topics as $topic)
                    <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="company">Company:</label>
            <select class="form-control" id="company" name="company" required>
                <option value="">Choose a company</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Game</button>
    </form>
@endsection
