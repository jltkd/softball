<?php

namespace App\Http\Controllers;
use App\Game;
use App\Opponent;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('game.create');
    }
}
