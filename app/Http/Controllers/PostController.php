<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Post::latest()->paginate();
        $products = Product::latest()->paginate();
        $profiles = Profile::latest()->paginate();

        return view('posts.index',compact('products','profiles','posts'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'detail' => 'required',
            'image' => 'required',
        ]);

        //Create new potss
        $requestData = $request->all();
        $fileName =$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->move($fileName, '/public/images');
        $requestData["image"] =$path;
       
        
        Post::create($requestData);
      
       
        //Redirect to home
        return redirect()->route('posts.index')->with('success', 'Post created successfully'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $profiles = Profile::latest()->paginate();
        
        $products = Product::latest()->paginate();
        $posts = Post::latest()->paginate();
        return view('profiles.index', compact('products','profiles','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'image' => 'required',
            'detail' => 'required',
        ]);
        $post->update($request->all());
    //     if($request->image != ''){        
    //         $path ='/public/';
  
    //         //code for remove old file
    //         // if($post->image != ''  && $post->image != null){
    //         //      $file_old = $path.time().$post->image;
    //         //      unlink($file_old);
    //         // }
  
    //         //upload new file
    //         $file = $request->image;
    //         $filename = $file->getClientOriginalName();
    //         $file->move($path, $filename);
  
    //         //for update in table
    //         $post->update(['image' => $filename]);
    //    }
    


       
        
        

        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}
