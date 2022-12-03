<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>鳥人間.com</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <h1>掲示板</h1>
        <form action="/comment/{{ $post->id }}" method="POST">
            @csrf

            <div class="name">
                <h2>名前</h2>
                <input type="text" name="comment[name]" placeholder="名前を入力" value="{{ old('name.title') }}"/>
            </div>
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="comment[title]" placeholder="タイトルを入力" value="{{ old('post.title') }}"/>
            </div>
            <div class="body">
                <h2>本文</h2>
                <textarea name="comment[body]" placeholder="本文を書く。" >{{ old('post.body') }}</textarea>
            </div>
            <input type="submit" value="返信"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>