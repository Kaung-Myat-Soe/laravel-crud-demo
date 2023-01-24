{{-- @extends('products.layout')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $products->links() }}

@endsection --}}


@extends('posts.layout')

@section('content')


<div  class="newfeed">
    <div  class="left_feed">
        <a href="{{ route('profiles.index') }}" class="lf_me ">
            <img  class="lf_p" 
            @foreach ($profiles as $profile )
            src="{{ asset($profile->pfimage) }}"
            @endforeach alt alt="">
            <div  class="lf_n">
               Kaung Myat Soe
            </div>
        </a>

        <a href=""  class="lf_me lf_pf">
        <img  class="lf_p" src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/-XF4FQcre_i.png" alt=""> 
            <div  class="lf_n">
               Friends Suggestions
            </div>
        </a>

        <a href=""  class="lf_me lf_pf">
        <img  class="lf_p" src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/mk4dH3FK0jT.png" alt=""> 
            <div  class="lf_n">
                Groups
            </div>
        </a>

        <a href=""  class="lf_me lf_pf">
        <img  class="lf_p" src="https://static.xx.fbcdn.net/rsrc.php/v3/yG/r/A1HlI2LVo58.png" alt=""> 
            <div  class="lf_n">
                Watch
            </div>
        </a>

        <a href=""  class="lf_me lf_pf">
        <img  class="lf_p" src="https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/AYj2837MmgX.png" alt=""> 
            <div  class="lf_n">
                Memories
            </div>
        </a>

        <a href=""  class="lf_me lf_pf">
        <img  class="lf_p" src="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/2uPlV4oORjU.png" alt=""> 
            <div  class="lf_n">
                Save
            </div>
        </a>

        <a href=""  class="lf_me lf_pf">
        <img  class="lf_p" src="https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/_JPdPzLmp9j.png" alt=""> 
            <div  class="lf_n">
                Ad Center
            </div>
        </a>
        
    </div>

    <div  class="mid_feed">
    <div  class="mf_highlight">
                <div  class="mf_highlight_items">


                    <div  class="mf_highlight_item">

                    </div>
                    <div  class="mf_highlight_item">

                    </div>
                    <div  class="mf_highlight_item">

                    </div>
                    <div  class="mf_highlight_item">

                    </div>
                    <div  class="mf_highlight_item">

                    </div>
                    <div  class="mf_highlight_item">

                    </div>
                    <div  class="mf_highlight_item">

                    </div>

                </div>
               
            </div>

            <div  class=" mf_up">
            <div  class="pe_h">
                <div  class=" mf_pe">
                    <a href="{{ route('profiles.index') }}">
                        <img   class="pe_m_p" 
                    @foreach ($profiles as $profile )
                    src="{{ asset($profile->pfimage) }}"
                    @endforeach alt=""> 
                    </a>
                    
                    <a href="{{ route('posts.create') }}" class="pe_txt">
                        <span>What's on your mind, Kaung?</span>
                    </a>
                </div>
                <div  class="mf_md">
                    <div  class="mf_live md_li">
                        Live video
                    </div>
                    <div  class="mf_phvd md_li">
                        Photo/Video
                    </div>
                    <div  class="mf_fel md_li">
                        Feeling/Activity
                    </div>
                </div>
            </div>

        </div>
        <div  class="ppl_ymk">
               <p  class="ppl_t"> People you may know</p>
            
        <div  class="mc_hold">
            @foreach ($posts as $post)
        <div  class="mc">
                <div  class="card2">
                    <div  class="blob"></div>
                <div  class="img"><img  class="pl_u_p" src="{{ asset($post->image) }}" alt=""> </div>
                <div  class="info">
                    <p  class="i_un"> Kaung Myat Soe</p>
                    
                </div>
                <div  class="m_bu">
                <a  class="add_fri" href="#">Add friend</a>
                
                </div>
                
                </div>
                </div>
                @endforeach
       
       
           

                

                </div>
        
        </div>
        @foreach ($posts as $post)
        <div  class="all_post">
           <div class="all_post_data">

           
            <div  class="all_p_owner">
                <a href="{{ route('profiles.index') }}">
                    <img  class="p_o_p"   @foreach ($profiles as $profile )
                    src="{{ asset($profile->pfimage) }}"
                    @endforeach >
                </a>
              
                
                <a href="{{ route('profiles.index') }}" class="p_o_n">
                    Kaung Myat Soe <span  class="span"></span>
                </a>
                <div  class="p_opt">
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                
            </div>

            <div  class="post_data">
                <div  class="p_d_tex">
                <p>{{ $post->detail }}</p>
                </div>

                    <img  class='p_d_p' src="{{ asset($post->image) }}">
                
            </div>
           
            <div  class="post_react">
                <div  class="p_r_count">
                    <div  class="p_l_c">
                        1.2M Likes
                    </div>
                    <div  class="p_c_c">
                        50M comments
                    </div>
                    <div  class="p_s_c">
                        500k Shares
                    </div>
                </div>
                <div  class="p_r_data">
                    
                
                <div  class="p_r_r">
                    Like
                </div>
                <div  class="p_r_c">
                    comment
                </div>
                <div  class="p_r_s">
                    Share
                </div>
                </div>
                
            </div>
            
        </div>
        
       

    </div>
    @endforeach
    </div>

    <div  class="right_feed">
        Right
    </div>
</div>

{{ $posts->links() }}

@endsection