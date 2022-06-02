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
        <div class="create">[<a href='/posts/create'>新規作成</a>]</div>
        <div class="posts">
                <div class='post'>
            @foreach ($posts as $post)
                    <form action="/posts/{{ $post->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('delete')
                        <div class="edit">[<a href='/posts/{{ $post->id }}/edit'>編集</a>]</div>
                        <button type="submit">削除</button>
                        <div class="delete"></div>
                        <h2 class="title">
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <p class='body'>{{ $post->body }}</p>
                    </form>
            @endforeach
                </div>
            
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
