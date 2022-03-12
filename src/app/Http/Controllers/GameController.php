<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game; //Postモデルをつかう
use Illuminate\Support\Facades\Auth; //ログイン機能を使う

class GameController extends Controller
{
    
    public function show ()
    {
        $games = Game::all();

        return view('games.show', ['games' => $games]);
        
    }


}
