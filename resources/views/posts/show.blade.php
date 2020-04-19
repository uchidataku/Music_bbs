@extends('layouts.app')

@section('content')
<article class="col-md-8 d-flex flex-column">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row m-3 no-gutters thread-box">
      	<div class="p-3 col-md-8 d-flex flex-column">
  		    <div><h3 class="m-3 p-3 thread-title">{{ $post->title }}</h3></div>
            <div><h5 class="m-3 p-3 thread-text">{{ $post->text }}</h5></div>
            <div class="d-flex flex-row justify-content-start">
                @foreach($post->categories as $category)
                    <p class="badge badge-primary m-2 p-1 genre">{{ $category->name }}</p>
                @endforeach
            </div>
            <p class="m-2 p-2">{{ $post->user->name }}</p>
            <p class="m-2 p-2">{{ $post->created_at }}</p>
        </div>
        <div class="col-md-4">
        </div>
        @if(Auth::id() === $post->user_id)
            <div class="m-2 p-2 col-md-12 d-flex flex-row">
                <div class="p-1">
                    <a href="{{ route('posts.edit', ['id' => $post->id]) }}">編集する</a>    
                </div>
                <div class="p-1">
                    <form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}" id="delete_{{ $post->id }}">
                        {{ csrf_field() }}
                        <a href="#" data-id="{{ $post->id }}" onclick="deletePost(this);">削除する</a>
                    </form>    
                </div>
            </div>
        @endif
    </div>
    @foreach($responses as $response)
        <div class="row m-3 no-gutters thread-box">
          	<div class="p-3 col-md-8 d-flex flex-column">
                <div><h5 class="m-3 p-3 thread-text">{{ $response->text }}</h5></div>
                <p class="m-2 p-2">{{ $response->user->name }}</p>
                <p class="m-2 p-2">{{ $response->created_at }}</p>
            </div>
            @if(Auth::id() === $response->user_id)
                <div class="m-2 p-2 col-md-12 d-flex flex-row">
                    <div class="p-1">
                        <form method="POST" action="{{ route('responses.destroy', ['id' => $response->id]) }}" id="delete_{{ $response->id }}">
                            {{ csrf_field() }}
                            <a href="#" data-id="{{ $response->id }}" onclick="deleteResponse(this);">削除する</a>
                        </form>    
                    </div>
                </div>
            @endif
        </div>
    @endforeach
    <form action="{{ route('responses.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="p-3 thread-box">
            <div class="text-center">
                <h2>新規コメント作成</h2>
            </div>
            <div class="row d-flex flex-column align-items-center">
                <div class="m-3 d-flex flex-column">
                    <div class="m-2">本文</div>
                    <input type="text" name="text"/>
                </div>
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="m-4"><input type="submit" value="コメントする"/></div>
            </div>
        </div>
    </form>
</article>

<script>
    function deletePost(e) {
        'use strict';
        if (confirm('本当に削除していいですか？')) {
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
    
    function deleteResponse(e) {
        'use strict';
        if (confirm('本当に削除していいですか？')) {
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>
@endsection
