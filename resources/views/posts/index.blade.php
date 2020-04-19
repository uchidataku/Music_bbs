@extends('layouts.app')

@section('content')
<article class="col-md-8 d-flex flex-column">
    <div class="panel panel-default">
        <div class="panel-heading text-center">キーワード検索</div>
        <div class="m-3 p-3 d-flex flex-column align-items-center">
            <form>
                <input type="text" name="keyword" value="{{ $keyword }}" placeholder="キーワードを入力..."/>
                <input type="submit" value="検索する"/>
            </form>
        </div>
        @if(!empty($data))
            <div class="panel-body">
                <ul>
                    @foreach($data as $post)
                        <li class="m-3"><a href="{{ action('PostController@show', $post->id) }}">{{ $post->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</article>
@endsection
