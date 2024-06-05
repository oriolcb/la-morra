<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MorraController extends Controller
{
    public function play(Request $request)
    {
        $request->validate([
            'player_fingers' => 'required|integer|min:1|max:5',
            'player_guess' => 'required|integer|min:2|max:10',
        ]);

        $playerFingers = $request->input('player_fingers');
        $playerGuess = $request->input('player_guess');
        $computerFingers = rand(1, 5);
        $totalFingers = $playerFingers + $computerFingers;
        $result = ($playerGuess === $totalFingers) ? 'win' : 'lose';

        return response()->json([
            'player_fingers' => $playerFingers,
            'computer_fingers' => $computerFingers,
            'player_guess' => $playerGuess,
            'total_fingers' => $totalFingers,
            'result' => $result
        ]);
    }
}
