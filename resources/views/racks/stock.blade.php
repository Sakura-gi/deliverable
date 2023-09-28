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
                <div class='rack-box'>
                <li>

                    <div class='book-title'>
                        <a href="/racks/{{ $post->id }}">{{ $post->title }}</a>
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                         @if ($post->is_favorite)
                       　<a>★</a>
                       　@else
                        <a></a>
                         @endif
                    </div>
                    <div class='book-info'>
                        <a href="/racks/{{ $post->id }}"><br>{{ $post->updated_at }}</a>
                    </div>
                </div>

                    <a href="/racks/{{ $post->id }}">{{ $post->title }}</a>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                     @if ($post->is_favorite)
                   <a>★</a>
                   @else
                    <a></a>
                     @endif

                </li>
                  @empty
                <li>投稿がありません。</li>
                  @endforelse
        </div> 
    </body>

</x-main-layout>
    
    </html>