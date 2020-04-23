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
    <form action="{{ route('posts.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="p-3 thread-box">
            <div class="text-center">
                <h2>新規スレッド作成</h2>
            </div>
            <div class="row d-flex flex-column align-items-center">
                <div class="m-3 d-flex flex-column">
                    <div class="m-2">スレッドタイトル</div>
                    <div class=""><input type="text" name="title" style="width:400px;"/></div>
                </div>
                <div class="m-3 d-flex flex-column">
                    <div class="m-2">本文</div>
                    <textarea type="text" name="text" rows=10 cols=80/></textarea>
                </div>
                <div class="m-3 d-flex flex-column">
                    <div class="m-2 text-center">ジャンル選択</div>
                    <div class="m-2">
                        @foreach($categories as $category)
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}">{{ $category->name }}
                        @endforeach
                    </div>
                </div>
                <div class="m-4"><input type="submit" value="新規スレッド作成"/></div>
            </div>
        </div>
    </form>
</article>
@endsection
