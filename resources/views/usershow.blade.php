@extends('layouts.app')

@section('content')
<article class="col-md-8 d-flex flex-column">
    <div class="panel panel-default">
        <div class="panel-heading text-center">ユーザー情報</div>
        <div class="panel-body">
            <div class="col-md-4">
                <label>ユーザーネーム</label>
            </div>
            <div class="col-md-8">
                <p>{{ $user->name }}</p>
            </div>
            <div class="col-md-4">
                <label>メールアドレス</label>
            </div>
            <div class="col-md-8">
                <p>{{ $user->email }}</p>
            </div>
            @if(Auth::id() === $user->id)
                <div class="m-2 p-2 col-md-12 d-flex flex-row">
                    <div class="p-1">
                        <form method="POST" action="{{ route('userdestroy', ['id' => $user->id]) }}" id="delete_{{ $user->id }}">
                            {{ csrf_field() }}
                            <a href="#" data-id="{{ $user->id }}" onclick="deleteUser(this);">削除する</a>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
</article>
<script>
    function deleteUser(e) {
        'use strict';
        if (confirm('本当に削除していいですか？')) {
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>
@endsection