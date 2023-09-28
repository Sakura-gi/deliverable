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
        $posts = $user->posts()->orderBy('updated_at', 'DESC')->take(10)->get();
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
        
        $post->is_favorite = true;
        $post->fill($input)->save();
        return view('racks.show')->with(['post' => $post]);
    }

    public function show(Post $post)
    {
        return view('racks.show')->with(['post' => $post]);
    }

    
    
    public function edit(Rack $rack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rack $rack)
    {
        //
    }
}
