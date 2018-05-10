@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Game</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form action="" method="POST" class="form">
                                <div class="form-group">
                                    <label for="game_date">Game Date</label>
                                    <input name="game_date" type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="opponent">Opponent</label>
                                    <select name="opponent" id="" class="form-control">
                                        @foreach($opponents as $opponent)
                                            <option value="{{ $opponent->team_name }}">{{ $opponent->team_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="game_time">Game Time</label>
                                    <input type="datetime-local" name="game_time" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="arrival_time">Arrival Time</label>
                                    <input type="datetime-local" name="arrival_time" class="form-control">
                                </div>
                                <div class="form-group">
                                    <legend>Home or Away</legend>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="home" value="home" class="form-check-input" checked>
                                            Home
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="away" value="away" class="form-check-input">
                                            Away
                                        </label>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
