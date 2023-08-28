<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view('index')->with(['user' => $user]);
    }   
   
   
    public function update(Request $request, User $user)
    {
        $input_user = $request['user'];
        $user->fill($input_user)->save();
        
        return redirect('/');

    }

    
}
