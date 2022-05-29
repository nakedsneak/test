<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        
        <title>Blog</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class="post">
            <h2 class="title">{{ $post->title }}</h2>
            <p class='body'>{{ $post->body }}</p>
            <d class='updated_at'>updated_at.{{ $post->updated_at }}</d>
        </div>
        <div class="back">[<a href='/'>一覧へ</a>]</div>
    </body>
</html>
