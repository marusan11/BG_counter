@extends('layouts.top')

@section('content')
    <h1 class="text-center text-primary">Hello, world!</h1>
            <div class="container">
                {{-- rowクラス:行を表す --}}
                {{-- col-{画面幅}-{グリッド数} --}}
                <div class="row">
                    <div class="col bg-primary border border-white">
                        <p class="text-white">当幅のカラム</p>
                    </div>
                    <div class="col bg-primary border border-white">
                        <p class="text-white">当幅のカラム</p>
                    </div>
                    <div class="col bg-primary border border-white">
                        <p class="text-white">当幅のカラム</p>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-4 bg-success border bordar-white">
                        <p class="text-white">4グリッド幅のカラム</p>
                    </div>
                    <div class="col-5 bg-success border bordar-white">
                        <p class="text-white">5グリッド幅のカラム</p>
                    </div>
                    <div class="col-3 bg-success border bordar-white">
                        <p class="text-white">3グリッド幅のカラム</p>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 bg-primary border border-white">
                                <h2 class="text-white py-4">コンテンツ1</h2>
                            </div>
                            <div class="col-lg-3 col-md-6 bg-primary border border-white">
                                <h2 class="text-white py-4">コンテンツ2</h2>
                            </div>
                            <div class="col-lg-3 col-md-6 bg-primary border border-white">
                                <h2 class="text-white py-4">コンテンツ3</h2>
                            </div>
                            <div class="col-lg-3 col-md-6 bg-primary border border-white">
                                <h2 class="text-white py-4">コンテンツ4</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection