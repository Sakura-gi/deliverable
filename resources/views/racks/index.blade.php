<x-main-layout>

   <div class="wrap">
        <body>
            
            <div class='userinfo'>
                
                <div class="user-name">
                    <p>
                        {{ $user->name }}のRack
                    <p>
                 </div>
                
                <div class="link">
                    <a href="/users/edit">ユーザー名を変更する</a>
                </div>
                
               
                
                 <div class="link">
                    <a href="/racks/create">新規投稿作成</a>
                </div>
                
            </div>
            
            <div class="link">
             <a href="/racks/stock">すべての投稿を見る</a>
            </div>
            
            <div class="head">
             <p>最近の投稿</p>
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
                        <a href="/racks/{{ $post->id }}">{{ $post->title }}</a>
                        @if ($post->is_favorite)
                       <a>★</a>
                       @else
                        <a></a>
                         @endif
                    </li>
                </div>
                      @empty
                    <li>投稿がありません。</li>
                  @endforelse
            </div> 
            
            <div class=is_favolite>
                @foreach ($favoritePosts as $post)
                <li>
                    <a href="/racks/{{ $post->id }}">{{ $post->title }}★</a>
                </li>
                @endforeach

            </div> 
            
            <div class="head">
             <p>お気に入りの投稿</p>
            </div>
            
            <div class='rack'>
                    @foreach ($favoritePosts as $post)
                    <div class='rack-box'>
                        <li>
                            <div class='book-title'>
                              <a href="/racks/{{ $post->id }}">{{ $post->title }}★</a>
                            </div>
                            <div class='book-info'>
                             <a href="/racks/{{ $post->id }}"><br>{{ $post->updated_at }}</a>
                            </div>
                        </li>
                    </div>
                    @endforeach
            </div>
        </body> 
   </div> 
</x-main-layout>