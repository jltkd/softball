@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $opponent->team_name }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p><b>Coach:</b> {{ $opponent->coach_name }}</p>
                        <p><b>Email Address:</b> <a href="mailto:{{ $opponent->coach_email }}">{{ $opponent->coach_email }}</a></p>
                        <p><b>Phone Number: </b><a href="tel:{{ $opponent->coach_phone }}">{{ $opponent->coach_phone }}</a></p>
                        <address>
                            {{ $opponent->field_address }}<br>
                            {{ $opponent->field_city }}, {{ $opponent->field_state }} {{ $opponent->field_zip }}
                        </address>
                        <p><b>Field Number: </b>{{ $opponent->field_number }}</p>
                        <p><b>Notes: </b>{{ $opponent->notes }}</p>
                        @foreach($opponent->games as $game)
                            echo $game->game_date
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
