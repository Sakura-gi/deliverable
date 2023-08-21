<x-main-layout>

   <div class="wrap">
        <body>
            <h1>
                {{ $user->name }}
            </h1>
            
            <div class="create-link">
                <a href="/racks/create">新規投稿作成</a>
            </div>
            
            <form action="/user" method="POST">
                @csrf
                <div class="name">
                    <h2>NAME</h2>
                    <input type='text' name="user[name]" placeholder="ユーザー名" value="{{ $user->name }}"/>
                </div>
            </form>
        </body> 
   </div> 
</x-main-layout>