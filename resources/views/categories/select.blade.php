<x-main-layout>
    
    
    
    <label for="category">カテゴリーを選択:</label>
<input list="categories" name="category" id="category">
<datalist id="categories">
    @foreach ($categories as $category)
        <option value="{{ $category->name }}">
    @endforeach
</datalist>
<button ="/categories">カテゴリーを表示</button>
   
    
    
</x-main-layout>