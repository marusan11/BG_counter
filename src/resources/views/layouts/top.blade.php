<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>BG_counter</title>
    </head>
    <body style="padding-top: 5rem">
        <header >
            {{-- ナビゲーションバーを構成する要素にnavbarクラスを設定します。（配下の要素にdisplay: flexが適用され、全体がflexbox要素となる）
            navbar-expand:ナビゲーションバー上の、リンクメニューなどのコンテンツを水平方向に表示 --}}

            {{-- 背景色はbg-*クラスで指定
            テキストやアイコンの色は、背景色が暗い場合はnavbar-darkクラスを、背景色が明るい場合はnabvar-lightクラスで指定 --}}

            {{-- 画面幅を設定したnavbar-expand{-sm|-md|-lg|-xl}クラスに指定 --}}
            <nav class="navbar fixed-top navbar-expand-md bg-primary navbar-dark">
                {{-- navbar-brand:会社名・ページタイトルやロゴなどを表示 --}}
                <a class="navbar-brand" href="{{ url('/') }}">BG_counter</a>

                {{-- メニューコンテンツの表示・非表示の切り替えを行うため、navbar-togglerクラスをトリガーとなるボタンに指定し、 navbar-collapseクラスでメニューコンテンスト囲みます。 --}}
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                    {{-- 折りたたんだときの横三本線のナビゲーションメニュー（通称：ハンバーガーメニュー）はnavbar-toggler-iconを使用 --}}
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- navbarクラスの子要素として、navbar-navクラスの要素を作成し、その配下にメニューとして表示するリンクタグなどを配置 （navbar-navクラスは配下の要素に対して、スペースの調整や、list-style: noneを適用） --}}

                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="{{ url('/') }}">ホーム</a>
                        <a class="nav-item nav-link" href="#">新規登録</a>
                        <a class="nav-item nav-link" href="#">ログイン</a>
                        <a class="nav-item nav-link" href="#">ゲストログイン</a>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <h1 class="text-center text-primary">Hello, world!</h1>


        </main>
        <footer>
            [ページや作者の情報を構成するタグ]
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
