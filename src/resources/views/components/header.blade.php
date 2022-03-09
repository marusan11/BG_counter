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
