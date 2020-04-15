@extends('layouts.app')

@section('content')
<main class="row">
	<article class="col-md-8 d-flex flex-column">
    	<div class="row m-3 no-gutters thread-box">
          	<div class="p-3 col-md-8 d-flex flex-column">
      		    <div><h3 class="m-3 p-3 thread-title">タイトルタイトルタイトルタイトル</h3></div>
                <div><h5 class="m-3 p-3 thread-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</h5></div>
                <div class="d-flex flex-row justify-content-start">
                    <p class="badge badge-primary m-2 p-1 genre">genre</p>
                    <p class="badge badge-primary m-2 p-1 genre">genre</p>
                </div>
                <p class="m-2 p-2">username</p>
                <p class="m-2 p-2">time</p>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <div class="row m-3 no-gutters thread-box">
          	<div class="p-3 col-md-8 d-flex flex-column">
      		    <div><h3 class="m-3 p-3 thread-title">タイトルタイトルタイトルタイトル</h3></div>
                <div><h5 class="m-3 p-3 thread-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</h5></div>
                <div class="d-flex flex-row justify-content-start">
                    <p class="badge badge-primary m-2 p-1 genre">genre</p>
                    <p class="badge badge-primary m-2 p-1 genre">genre</p>
                </div>
                <p class="m-2 p-2">username</p>
                <p class="m-2 p-2">time</p>
            </div>
            <div class="col-md-4">
            </div>
        </div>
	</article>
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
                    <div class="m-2"><button class=" btn btn-outline-primary">新規登録</button></div>
                    <div class="m-2"><button class="btn btn-outline-success">ログイン</button></div>
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
@endsection
