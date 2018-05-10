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
        $opponents = Opponent::all(['team_name']);
        return view('game.create', compact('opponents'));
    }
}
