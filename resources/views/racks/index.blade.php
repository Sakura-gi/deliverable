<x-main-layout>

   <div class="wrap">
        <body>
            <div class='userinfo'>
                <h1>
                    {{ $user->name }}
                </h1>
                
                <div class="create-link">
                    <a href="/racks/create">新規投稿作成</a>
                </div>
                
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