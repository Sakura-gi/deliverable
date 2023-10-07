<x-main-layout>
    
    


<body>
    <form action="/posts/{{ $post->id }}" method="POST">
     @csrf
     @method('PUT')
        <div class="title">
            <input type='text' name='post[title]' value="{{ $post->title }}">
        </div>
    
        <div class="url">
            <input type='url' name='post[url]' value="{{ $post->url }}">
        </div>
        
        <dev class="comment">
            <input type='text' name='post[comment]' value="{{ $post->comment }}">
        </dev>
        
        <div class=category>
            <input type="text" name="post[category_name]" list="category" placeholder="{{ $post->category->name }}">
                <datalist id="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->name }}" >{{ $category->name }}</option>
                    @endforeach
                </datalist>
        </div>
    
    
    
        <div class=is_favolite>
            @if ($post->is_favorite)
            <p>お気に入りに登録済みです</p>
            @else
                <p>まだお気に入りに登録されていません</p>
            @endif
            
            <label for="is_favorite">お気に入り：</label>
            <input type="checkbox" id="is_favorite" name="post[is_favorite]" value="1" {{ $post->is_favorite ? 'checked' : '' }}>
        </div>
        
    <input type="submit" value="保存">
    </form>
</body>
    
    
    
</x-main-layout>