<x-main-layout>

   <div class="wrap">
        <body>
            
            <div class='userinfo'>
                <h1>
                    {{ $user->name }}
                </h1>
                
                <form action="/users/{{ $user->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="name">
                        <h2>NAME</h2>
                        <input type='text' name="user[name]" placeholder="ユーザー名" value="{{ $user->name }}"/>
                    </div>
                    
                    <div class="submit-btn">
                     <input type="submit" value="ユーザー名を変更"/>
                    </div>
                    
                </form>
                
                 <div class="create-link">
                    <a href="/racks/create">新規投稿作成</a>
                </div>
                
            </div>
            
             <a>本棚</a>
            
            <div class="stock-link">
             <a href="/racks/stock">すべての投稿を見る</a>
            </div>
            
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
   </div> 
</x-main-layout>