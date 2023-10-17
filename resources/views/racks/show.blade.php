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
        <div class="title">
            <div class='head'>
                <p>タイトル</p>
            </div>
            {{ $post->title }}
        </div>
        
        <div class="url">
            <div class='head'>
                <p>URL</p>
            </div>
            <a href="{{ $post->url }}" target="_blank">リンク先へ</a>
        </div>
        
        <dev class="comment">
            <div class='head'>
                <p>コメント</p>
            </div>
            {{ $post->comment }}
        </dev>
        
        <div class='category'>
            <div class='head'>
                <p>カテゴリー</p>
            </div>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        </div>
        
        <div>
        @if ($post->is_favorite)
            <p>★お気に入り</p>
        @else
            <p>お気に入りではありません。</p>
        @endif
        </div>
        
        <div class="link">
           <a href="/posts/{{ $post->id }}">編集する</a>
        </div>        
        
        <div class="link">
            <a href="/">ホームに戻る</a>
        </div>

    </body>
    
</x-main-layout>    
    
</html>