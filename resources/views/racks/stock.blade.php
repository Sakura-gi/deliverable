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
        
        <a href="/">戻る</a>
        
        <div class='rack'>
               　　@forelse($posts as $post)
                <li>
                    <a href="/racks/{{ $post->id }}">{{ $post->title }}</a>
                </li>
                  @empty
                <li>投稿がありません。</li>
                  @endforelse
        </div> 
    </body>

</x-main-layout>
    
    </html>