<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>

<x-main-layout>

   <div class="wrap">
        <body>
            <div class='head'>
                投稿作成フォーム
            </div>
            

            <div class="link-b">
                 <a href="/">戻る</a>
            </div>

            <div>
            <form action="/racks/create" method="POST">
              @csrf
                    <div class= "title">
                         <h2>Title</h2>
                         <input type='text' name="post[title]" placeholder="タイトル(/作者名)"/>
                    </div>
                   
                    <div class="url">
                         <h2>URL</h2>
                         <input type='text' name="post[url]" placeholder="URLをペースト"/>
                    </div>
                   
                    <div class="comment">
                         <h2>Comment</h2>
                         <textarea name="post[comment]" placeholder="コメントを入力"/></textarea>
                    </div>
                   
                    <div class=category>
                      <h2>Catagory</h2>
                        <input type="text" name="post[category_name]" list="category" placeholder="新しいカテゴリー">
                         <datalist id="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                         </datalist>
                    
                   <div class="is_favorite">
    <label for="is_favorite">お気に入りに登録する</label>
    <input type="checkbox" name="is_favorite" id="is_favorite">
</div>>
                    
                    <div class="submit-btn">
                     <input type="submit" value="本棚にしまう"/>
                    </div>
                    
                    
            </form>
            </div>
        </body> 
   </div> 
</x-main-layout>