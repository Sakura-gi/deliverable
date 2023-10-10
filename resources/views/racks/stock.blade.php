
<x-main-layout>

    <div class='wrap'>
        <body>
            <div class='link-b'>
                <a href="/">戻る</a>
            </div>
            
            <div class='head'>
                <p>全ての投稿</p>
            </div>
            
             <div class='rack'>
                 @forelse($posts as $post)
                <div class='rack-box'>
                    <li>
                        <div class='book-title'>
                            <a href="/racks/{{ $post->id }}">{{ $post->title }}</a>
                            @if ($post->is_favorite)<a>★</a>
                            @else<a></a>
                            @endif
                        </div>
                        <div class='book-info'>
                            <a href="/racks/{{ $post->id }}"><br>{{ $post->updated_at }}</a>
                        </div> 
                    </li>
                </div>
                      @empty
                    <li>投稿がありません。</li>
                  @endforelse
            </div>  
             
             
        </body>
    </div>
</x-main-layout>
    
    </html>