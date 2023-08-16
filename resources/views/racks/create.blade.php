<x-main-layout>

   <div class="wrap">
         <body>
             　　<form action="/racks" method="POST">
                     <h1>your rack</h1>
                    
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
                   
                     <input type="submit" value="store"/>
           
           　　　</form>
          </body> 
   </div> 
</x-main-layout>