<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::get();
        return view('users.index',compact('users'));
    } 
    
    public function edit()
    {
        $user = auth()->user();
        return view('users.edit')->with('user', $user);
    }
    
   
    public function update(Request $request, User $user)
    {
        $input_user = $request['user'];
        $user->fill($input_user)->save();
        
        return redirect('/');
    }
    
    public function stock(User $user)
    {
        $user = auth()->user();
        $posts = $user->posts()->get();
        return view('users.stock',compact('user', 'posts'));
    }


    public function show(User $user)
    {
        // ユーザーの投稿一覧を取得
        $posts = $user->posts()->take(10)->orderBy('created_at', 'desc')->get();
        return view('users.show', compact('user', 'posts'));
    }
    
    

    
    
}
