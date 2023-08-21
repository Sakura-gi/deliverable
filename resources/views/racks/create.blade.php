<x-main-layout>

   <div class="wrap">
        <body
         ><h1></h1>
            <form action="/racks" method="POST">
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