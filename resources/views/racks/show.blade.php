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
            {{ $post->url }}
        </div>
        
        <dev class="comment">
            {{ $post->comment }}
        </dev>
        
        <div class="footer">
            <a href="/">ホームに戻る</a>
        </div>

    </body>
    
</x-main-layout>    
    
</html>