@extends('layouts.main')

@section('content')
    <div class="row">

        @foreach ($companies as $company)
            <div class="col-3 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $company->name }}</h5>
                        <div class="row">
                            <div class="col">
                                <p>This button shows the games produced by the company</p>
                                <a href="{{ route('company.game',$company->id) }}" class="btn btn-primary form-control">{{ __('Company games') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <hr>
    <div class="d-flex justify-content-center">
        {{ $companies->links() }}
    </div>
@endsection
