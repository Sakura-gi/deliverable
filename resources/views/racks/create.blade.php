<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>

<x-main-layout>

   <div class="wrap">
        <body>
            <h1>投稿作成フォーム</h1>
            <div class="create-link">
                 <a href="/">戻る</a>
            </div>
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
                    <div class="submit-btn">
                     <input type="submit" value="store"/>
                    </div>
            </form>
        </body> 
   </div> 
</x-main-layout>