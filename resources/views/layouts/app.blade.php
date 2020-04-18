<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/custom.css',true) }}" rel="stylesheet">
    <link href="{{ asset('css/app.css',true) }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="{{ asset('css/main.css',true) }}" rel="stylesheet">
</head>
<body>
    <header class="navbar-default">
        <div class="p-3 toplogo text-center">
            <h1 class="m-3"><a href="{{ route('toppage') }}">おんがく.BBS</a></h1>
        </div>
        <hr color="#888" width="100%" size="2">
        <nav class="p-3 d-flex justify-content-around">
            <p>ジャンル一覧</p>
            <p>キーワード検索</p>
            @guest
                <a href="{{ route('login') }}">ログイン</a>
                <a href="{{ route('register') }}">新規登録</a>
            @else
                <p>{{ Auth::user()->name }}</p>
            @endguest
        </nav>
    </header>
    <div class="container">
        <main class="row">
            @yield('content')
            <aside class="col-md-4">
        	    <div class="sidebar d-flex flex-column">
                    <div class="sidebar-title text-center">
                        <h3>Menu</h3>
                    </div>
                    <div class="sidebar-item d-flex flex-column text-center">
                        <div class="p-2"><h4>探す</h4></div>
                        <div>
                          <div class="m-3">テキストスペース</div>
                          <div class="m-3">キーワード検索</div>
                        </div>
                    </div>
                    <div class="sidebar-item d-flex flex-column text-center">
                        <div class="p-2"><h4>作る</h4></div>
                        @guest
                            <p>スレッド作成には、ログインが必要です。</p>
                        @else
                            <div class="m-2"><button class=" btn btn-outline-primary">新規スレッド作成</button></div>
                        @endguest
                    </div>
                    <div class="sidebar-item d-flex flex-column text-center">
                        @guest
                            <div class="m-2"><h4>登録/ログイン</h4></div>
                            <div class="m-2"><button class=" btn btn-outline-primary"><a href="{{ route('register') }}">新規登録</a></button></div>
                            <div class="m-2"><button class="btn btn-outline-success"><a href="{{ route('login') }}">ログイン</a></button></div>
                        @else
                            <div class="m-2"><h4>ユーザー情報</h4></div>
                            <div class="m-2"><button class="btn btn-outline-primary">{{ Auth::user()->name }}</button></div>
                            <div class="m-2">
                                <button href="{{ route('logout') }}"
                                class="btn btn-outline-danger"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    ログアウト
                                </button>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        @endguest
                    </div>
                </div>
        	</aside>
	    </main>
    </div>
    <footer>
        <p class="p-3 text-center">おんがく.BBS<br>created by taku</p>
    </footer>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js',true) }}"></script>
</body>
</html>
