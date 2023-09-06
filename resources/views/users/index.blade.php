

    
<x-main-layout>

    <body>
        <a>友達一覧表示画面</a>
        
        <div class="all_user">
            @forelse($users as $user)
        <li>
            <a href="/users/{{ $user->id }}">{{  $user->name  }}</a>
        </li>
            @empty
        <li>ユーザー情報がありません</li>
            @endforelse
        </div>
        
        
    </body>
    
</x-main-layout>
