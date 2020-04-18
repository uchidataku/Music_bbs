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
    <form method="POST" action="{{ route('posts.update', ['id' => $post->id]) }}">
        {{ csrf_field() }}
        <div class="p-3 thread-box">
            <div class="text-center">
                <h2>スレッド編集</h2>
            </div>
            <div class="row d-flex flex-column align-items-center">
                <div class="m-3 d-flex flex-column">
                    <div class="m-2">スレッドタイトル</div>
                    <div class=""><input type="text" name="title" value="{{ $post->title }}"/></div>
                </div>
                <div class="m-3 d-flex flex-column">
                    <div class="m-2">本文</div>
                    <input type="text" name="text" value="{{ $post->text }}"/>
                </div>
                <div class="m-3 d-flex flex-column">
                    <div class="m-2 text-center">ジャンル選択</div>
                    <div class="m-2">
                        @foreach($categories as $category)
                            <input type="checkbox" 
                                name="categories[]" 
                                value="{{ $category->id }}" 
                                @foreach($post->categories as $genre)
                                <?=  $category->id === $genre->id ? 'checked' : '' ?>
                                @endforeach>
                            {{ $category->name }}
                        @endforeach
                    </div>
                </div>
                <div class="m-4"><input type="submit" value="更新する"/></div>
            </div>
        </div>
    </form>
</article>
@endsection
