<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>鳥人間.com</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>掲示板</h1>
        <h2 class="title">{{ $post->title }}</h2>
        <p class='body'><font size="1">{{ $post->updated_at }}</font></p>
        <div class="content">
            <div class="content__post">
                <p>{{  $post->name }}</p>
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        
        <a href='/posts/{{ $post->id }}/reply'>返信する</a>
        
        <p><font size="1">----------------------------------------------------------------------------------------------------------------------------</font></p>
        <h2>返信</h2>
         <div class="content">
             @foreach($comments as $comment)
             <div class="content__comment">
                 <h3>名前</h3>
                <p>{{  $comment->name }}</p>
                <h3>本文</h3>
                <p>{{ $comment->body }}</p>    
            </div>
            <p><font size="1">----------------------------------------------------------------------------------------------------------------------------</font></p>
            @endforeach
        </div>
        
        <a href='/posts/{{ $post->id }}/reply'>返信する</a>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>