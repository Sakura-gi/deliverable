<!DOCTYPE HTML>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>

<x-main-layout>

    <body>
        
        <h1 class="title">
            {{ $post->title }}
        </h1>
        
        <div class="url">
            <a href="{{ $post->url }}" target="_blank">リンク先へ</a>
        </div>
        
        <dev class="comment">
            {{ $post->comment }}
        </dev>
        
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        
        <div>
        @if ($post->is_favorite)
            <p>★お気に入り</p>
        @else
            <p>お気に入りではありません。</p>
        @endif
        </div>
        
        <div class="edit">
           <a href="/posts/{{ $post->id }}">編集する</a>
        </div>        
        
        <div class="footer">
            <a href="/">ホームに戻る</a>
        </div>

    </body>
    
</x-main-layout>    
    
</html>