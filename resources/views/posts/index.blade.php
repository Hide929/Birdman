<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>鳥人間.com</title>
        <!-- Fonts -->
        
        <link rel="stylesheet" href="/css/style.css">
      
    </head>
    
    
    <body>
        

        
  
        
        <h1>質問部屋</h1>
                
        <nav>
        <ul>
        <li><a href="/">Home</a></li>
        <li><a href='/posts/index'>質問部屋</a></li>
        </ul>
        </nav>
        
        <a href='/posts/create'>投稿作成</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                    <p class='body'><font size="1">{{ $post->updated_at }}</font></p>
                </div>
            @endforeach
        </div>
         <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
             <div class="footer">
                <a href="/">戻る</a>
            </div>
        
    </body>
</html>