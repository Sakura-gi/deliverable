<x-main-layout>      
                 
                 
                 
                 
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

</x-main-layout> 