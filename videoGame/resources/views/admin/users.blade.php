@extends('layouts.main')
@section('content')
    <h3 class="text-center">User List</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if(Auth::user()->id !== $user->id) <!-- Ellenőrizzük, hogy a bejelentkezett felhasználó nem saját magát akarja törölni -->
                            <form method="POST" action="{{ route('users.destroy', $user->id) }}" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @else
                            <span class="text-muted">Not Allowed</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
