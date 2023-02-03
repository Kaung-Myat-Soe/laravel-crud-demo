<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

        $detail = (session('detail'));

        if($detail>150){

            $html = "<div class='s_m readmore' id='readmore'>...See more</div>
            <div id='more 'style='display:none;'>{{ ($detail,200)}}</div>";

            // echo $html;

        }


        return view('posts.index',compact('products','profiles','posts'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $temp = url()->previous();

        $home = url()->route('posts.index');
        $userprofile =url()-> route('profiles.index');

        // echo $temp;

        if($temp=='http://127.0.0.1:8000/posts'){

            // echo $home;

            session(['temp' => $home]);

            return view('posts.create');

        }
         if($temp=='http://127.0.0.1:8000/profiles'){

            // echo $userprofile;

            session(['temp' => $userprofile]);

            return view('posts.create');

        }
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
            'detail',
            'image',
        ]);
        $requestData = $request->all();
        //Create new potss
        if ($request->hasFile('image')) {
            $requestData = $request->all();
            $fileName =$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->move($fileName, '/public/images');
            $requestData["image"] =$path;
           
            
            Post::create($requestData);
        }
        Post::create($requestData);
       
        $detail = 'detail';

        session(['detail' => $detail]);


        $previous = (session('temp'));

        // echo 'This is '. $previous ;

        // echo $previous;

       if( $previous=='http://127.0.0.1:8000/posts'){

        $posts = Post::latest()->paginate();
        $products = Product::latest()->paginate();
        $profiles = Profile::latest()->paginate();
        return redirect('http://127.0.0.1:8000/posts');
            // echo $previous;

       }

       if( $previous=='http://127.0.0.1:8000/profiles'){

        $posts = Post::latest()->paginate();
        $products = Product::latest()->paginate();
        $profiles = Profile::latest()->paginate();

        return redirect('http://127.0.0.1:8000/profiles');
        // echo $previous;


       }
        
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
            'image' ,
            'detail',
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
    


       
        
        

    return redirect()->back();
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

        $previous = url()->previous();

       if( $previous=='http://127.0.0.1:8000/posts'){

        $posts = Post::latest()->paginate();
        $products = Product::latest()->paginate();
        $profiles = Profile::latest()->paginate();

        return redirect('http://127.0.0.1:8000/posts');
            // echo $previous;

       }

       if( $previous=='http://127.0.0.1:8000/profiles'){

        $posts = Post::latest()->paginate();
        $products = Product::latest()->paginate();
        $profiles = Profile::latest()->paginate();

        return redirect('http://127.0.0.1:8000/profiles');
        // echo $previous;


       }
    }
}
