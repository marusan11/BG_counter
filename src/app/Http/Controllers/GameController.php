<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game; //Postモデルをつかう
use Illuminate\Support\Facades\Auth; //ログイン機能
use Illuminate\Support\Facades\Facade;
use PhpParser\Builder\Function_;

class GameController extends Controller
{
    
    public function show ()
    {
        // モデルからの投稿を全権取得して表示する
        $games = Game::all();

        // 取得したデータをビューに変数として渡す
        return view('games.show', ['games' => $games]);
    }
    
    // 登録(投稿)画面表示
    public function create ()
    {
        // create.blade.phpを表示する
        return view('games.create');
    }


    // 登録(投稿)処理
    public function store(Request $request)
    {
        // Gameモデルのインスタンスを生成
        $game = new Game;

        // ユーザーが入力したリクエストの情報を格納していく
        $game = new Game;
        
        
    }



}
