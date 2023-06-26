@extends('layouts.main')
@section('content')
@if($plays->count() > 0)
<h3 class = "text-center">Your played games list</h3>

<table class="table table-dark text-center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Game name</th>
        <th scope="col">Added at</th>
        <th scope="col">Delete from played</th>
      </tr>
    </thead>
    <tbody>

            @foreach($plays as $play)
                <tr>
                    <th scope="row">{{ $play->id }}</th>
                    <td>{{ $play->game_name }}</td>
                    <td>{{ $play->created_at }}</td>
                    <td>
                        <form method="POST" action="{{ route('game.deletePlayedGame', $play->id) }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-outline-danger" type="submit">{{ __('Delete') }}</button>
                        </form>

                    </td>
                </tr>
            @endforeach
    </tbody>
  </table>
  @else
  <h3 class = "text-center">No played games yet.</h3>
@endif
@endsection
