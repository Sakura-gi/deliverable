

<x-main-layout>

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
            </div>h

</x-main-layout>