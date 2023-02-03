<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::latest()->paginate(1);
        $posts = Post::latest()->paginate();

        $detail = (session('detail'));

       if($detail>150){

            $html = "<div class='s_m readmore' id='readmore'>...See more</div>
            <div id='more 'style='display:none;'>{{ ($detail,200)}}</div>";

            // echo $html;

        }


        return view('profiles.index',compact('profiles','posts'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //Validate the input

       $request->validate([
        'pfimage' => 'required',
    ]);

    //Create new profile
    $requestData = $request->all();
    $fileName = time().$request->file('pfimage')->getClientOriginalName();
    $path = $request->file('pfimage')->move($fileName, '/public/images');
    $requestData["pfimage"] =$path;
   
    
    Profile::create($requestData);
  
   
    //Redirect to home
    return redirect()->route('profiles.index')->with('success', 'Product created successfully'); 
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profiles.show',compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profiles.edit',compact('profiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'image' => 'required',
            'detail' => 'required',
        ]);

        $profile->update($request->all());

        return redirect()->route('profiles.index')
                        ->with('success','profiles updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('profiles.index')
                        ->with('success','Post deleted successfully');
    }
}
