<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class RackController extends Controller
{
    
  
    public function index(Post $post)
    {
        $user = auth()->user();
        return view('racks.index')->with(["user" => $user]);
        
    }
    // userupdateの処理を書く

    public function create()
    {
        return view('racks.create');
    }
 
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $input += ['user_id' => $request->user()->id];
        $input += ['category_id' => 1];
        $post->fill($input)->save();
        return view('racks.show')->with(['post' => $post]);
    }

    
    public function show(Post $post)
    {
        return view('racks.show')->with(['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rack  $rack
     * @return \Illuminate\Http\Response
     */
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
    public function update(Request $request, Rack $rack)
    {
        //
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
