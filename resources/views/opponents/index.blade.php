@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container-fluid">
                            <div class="row">
                                @foreach($opponents as $opponent)
                                    <div class="col-md-4">
                                        <div class="card mb-4 box-shadow">
                                            <img src="https://images.unsplash.com/photo-1482632322416-218f4e111f73?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=81409b9fa46be28b4806293f453aedaf&auto=format&fit=crop&w=2250&q=80" style="max-width:100%; height:auto;" alt="{{ $opponent->team_name }}" title="{{ $opponent->team_name }}">
                                            <div class="card-body">
                                                <div class="card-text">
                                                    <h4>{{ $opponent->team_name }}</h4>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <a href="/opponents/{{ $opponent->id }}" class="btn btn-sm btn-outline-secondary">View</a>
                                                        <a href="/opponents/{{ $opponent->id }}/edit" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    </div>
                                                    <small class="text-muted">{{ $opponent->coach_name }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{ $opponents->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
