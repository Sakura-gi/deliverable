<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class RackController extends Controller
{
    
    public function stock(Post $post)
    {
        $user = auth()->user();
        $posts = $user->posts()->orderBy('updated_at', 'DESC')->limit(30)->get();
        return view('racks.stock',compact('user', 'posts'));
    }
   
     
    public function index(Post $post)
    {
        $user = auth()->user();
        $posts = $user->posts()->orderBy('updated_at', 'DESC')->take(20)->get();
        $favoritePosts = Post::where('is_favorite', true)->take(5)->get();
        return view('racks.index',compact('user', 'posts','favoritePosts'));
         
        
    }
    // userupdateの処理を書く

    public function create(Category $category)
    {
        return view('racks.create')->with(['categories' => $category->get()]);
    }
 
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $input += ['user_id' => $request->user()->id];
        
        
        $categoryName = $input['category_name'];
        

        // カテゴリーが既に存在するかどうかを確認
        $existingCategory = Category::where('name', $categoryName)->first();
        if (!$existingCategory) {
            // カテゴリーが存在しない場合、新しいカテゴリーを作成
            $category = new Category();
            $category->name = $categoryName;
            $category->save();
            
            $category_id = $category->id;
        } else {
            // カテゴリーが既に存在する場合、それを使用
            $category_id = $existingCategory->id;
        }
        // postsテーブルに対するcategory_idの保存処理を書く。
        $input += ['category_id' => $category_id];
        
    $isfavorite = $request->has('is_favorite');
    $input['is_favorite'] = $isfavorite;
       
       $post->fill($input)->save();
        return view('racks.show')->with(['post' => $post]);
    }

    public function show(Post $post)
    {
        return view('racks.show')->with(['post' => $post]);
    }

    
    
   public function edit(Category $category, Post $post)
    {
        $categories = Category::get();
        return view('racks.edit',compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $categoryName = $input_post['category_name'];
        

        // カテゴリーが既に存在するかどうかを確認
        $existingCategory = Category::where('name', $categoryName)->first();
        if (!$existingCategory) {
            // カテゴリーが存在しない場合、新しいカテゴリーを作成
            $category = new Category();
            $category->name = $categoryName;
            $category->save();
            
            $category_id = $category->id;
        } else {
            // カテゴリーが既に存在する場合、それを使用
            $category_id = $existingCategory->id;
        }
        
        $input_post += ['category_id' => $category_id];

         $post->is_favorite = $request->has('post.is_favorite') ? true : false;
        
        $post->fill($input_post)->save();
        
        return view('racks.show')->with(['post' => $post]);
    }
    
    public function favorites()
    {
        $favoritePosts = Post::where('is_favorite', true)->get();
        return view('racks.favorites', compact('favoritePosts'));
    }



}
