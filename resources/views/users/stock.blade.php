<x-main-layout>

    <h1>
        {{ $user->name }}
    </h1>
    

    <div class='rack'>
       　　@forelse($posts as $post)
        <li>
            <a href="/racks/{{ $post->id }}">{{ $post->title }}</a>
        </li>
          @empty
        <li>投稿がありません。</li>
          @endforelse
    </div> 

</x-main-layout>