@extends('layouts.app')

@section('content')
    <div class="col-md-6 mx-auto">
        <a class="btn btn-primary btn-md" href="{{ route('game.create') }}">
            <i class="far fa-create"></i>＋新規投稿する
        </a>
        @foreach ($games as $game)
            <div class="card-wrap">
                <div class="card mt-3">
                    <div class="card-header">
                        {{ $game->user->name }}
                    </div>
                    <div class="card-body">
                        <h3>
                            {{ $game->title }}
                        </h3>
                        <p class="mb-4">
                            {{ $game->body }}
                        </p>
                        <div class="text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                詳細
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection