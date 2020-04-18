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
        <div class="m-2 p-2 col-md-12">
            <a href="{{ route('posts.edit', ['id' => $post->id]) }}">編集する</a>
            <a href="#">削除する</a>
        </div>
    </div>
</article>
@endsection
