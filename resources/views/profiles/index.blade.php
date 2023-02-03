
<x-app-layout>
    <x-slot  name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div id="P2"   class="P_2" >
       
          
      <div id="C2"  class="C_1 card_1">
        
        <img   class="c-img" src="" alt="">
     
          
        <a href="{{ route('profiles.create') }}" class="pf_chng_btn">
          <p>+</p> 
           </a>
            <img id="pi"  class="img " 
            @foreach ($profiles as $profile )
            src="{{ asset($profile->pfimage) }}"
            @endforeach alt="Profile">  
          
            
       
            
        <p id="name"  class=" u_n">
           Kaung Myat Soe
            </p>
            
        <div  class="p-d">
            
            <div  class="cc bt b-d">Delete</div>
            <div  class="cc bt b-c">
                Add friend
            </div>
           
           
        </div>
        <div  class="detail">
            <div  class="intro">
                
           
            <div  class="bio">
                <b  class="int">Intro</b>
            </div>
            <div  class="about">
                
                <div>
                    Relationship <span> Single.</span>
                   
                </div>
                <div>
                Followed by <b>100,000,400 people</b>
                </div>
            </div><br>
            <div  class="highlight">
               <div  class="highlight_items">
                
               
                <div  class="highlight_item">
                    
                </div>
                <div  class="highlight_item">
                    
                </div>
                <div  class="highlight_item">
                    
                </div>
                <div  class="highlight_item">
                    
                </div>
                <div  class="highlight_item">
                    
                </div>
                <div  class="highlight_item">
                    
                </div>
                <div  class="highlight_item">
                    
                </div>
                </div>
            </div>
            </div>
            <div  class="photos">
               <b  class="ph_n">Photos</b> <a  class="sa_p">See all photos</a>
                <div  class="photo_album">
                    <div  class="photo_item pi_1">
                        
                    </div>
                    <div  class="photo_item pi_2">
                        
                    </div>
                    <div  class="photo_item pi_3">
                        
                    </div>
                    <div  class="photo_item">
                        
                    </div>
                    <div  class="photo_item">
                        
                    </div>
                    <div  class="photo_item">
                        
                    </div>
                    <div  class="photo_item pi_7">
                        
                    </div>
                    <div  class="photo_item pi_8">
                        
                    </div>
                    <div  class="photo_item  pi_9">
                        
                    </div>
                </div>
            </div>
            <div  class="friends">
                <b  class="fr_n">Friends</b><a  class="sa_p">See all friends</a>
                <div  class="friend_list ">
                    
               
                <div  class="firend_list ">
                    
                </div>
                <div  class="firend_list ">
                    
                </div>
                <div  class="firend_list">
                    
                </div>
                <div  class="firend_list">
                    
                </div>
                <div  class="firend_list">
                    
                </div>
                <div  class="firend_list">
                    
                </div>
                <div  class="firend_list ">
                    
                </div>
                <div  class="firend_list ">
                    
                </div>
                <div  class="firend_list ">
                    
                </div>
                
                </div>
            </div>
            
            @foreach ($posts as $post )
            <div  class="posts">
                <div  class="all_post">
           
                    <div  class="all_p_owner">
                        
                        <img  class="p_o_p"
                        @foreach ($profiles as $profile )
                         src="{{ asset($profile->pfimage) }}" 
                         @endforeach >
                       
                        <a href="{{ route('profiles.index')}}" class="p_o_n">
                           Kaung Myat Soe <span  class="span"></span>
                        </a>
                        <div  class="p_opt">
                            ...
                        </div>
                        
                    </div>
        
                    <div  class="post_data">
                        <div  class="p_d_tex">
                         
                        <p>{{ $post->detail }}</p>
                      
                        </div>
                        
                            <img  class='p_d_p'
                           
                             src="{{ asset($post->image) }}"
                             >
                       
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
                
            
    </div>
    </div> --}}
    <main class="main">
        

   
    <div class="u_p grid grid-rows-1">
        <a class="py-1 back px-4 text-sm text-white-600 font-semibold rounded   hover:bg-dark-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2" href="{{ route('posts.index') }}">Back</a> <br>
        <div class="bp_h rounded-tlg ">
            <div class="u_p_bp justify-content-center rounded-tlg hover:opacity-100 ">
               
            </div>
        </div>

        <div class="up_p opacity-100 ">
           <img class="pfp opacity-100" 
           @foreach ($profiles as $profile )
           src="{{ asset($profile->pfimage) }}"
           @endforeach alt="">

           <div class="pf_ch_ic">
            <a href="{{ route('profiles.create') }}">
                <i class="pf_ch_ic_p" >
                    
                </i>
            </a>
                

           </div>
        </div>

        <h1 class="u_n ">
            Kaung Myat Soe
        </h1>

        <div class="sp_ed_hol">

            <div class="sp_ed">
                <div class="st_ed ">
                    <div class="st_h">
                        <p class="plus">+</p> 
                    </div>
                    <p class="st"> Add story</p>
                  
                </div >
    
                <div class="pf_ed">
                    Edit profile
                </div>
            </div>

        </div>

        
        
       
        

    </div>


    
    <div class="d_co">

        <div class="detail">
            <div class="lf_dt ">
                <div class="intro">


                </div>

                <div class="photo">

                </div>
            </div>

            <div class="ri_dt ">
                <div class="p_up">

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
                    <strong> . . .</strong>
                   
                    <form action="{{ route('posts.destroy',$post->id) }}" class="post_action" method="POST">
                        <a class="ed_post" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="de_post">Delete</button>
                    </form>
                </div>
                
            </div>

            <div  class="post_data">
               
                 
                    {{-- <p class="sm">...See more </p> --}}
                <div  class="p_d_tex">
                <p class="pd_txt_p">{{ substr($post->detail,0,120)}}
               {{-- {{$post->$html}} --}}

               {{-- @if(strlen($post->detail)>120)
                
               <div id="readmore" class='s_m readmore'> 

              <p id="textmore" class="more_text">{{ substr($post->detail,120,9999999999999)}}</p> 

            
              
          
                  
            </div>
            @endif --}}
             
                </p>  
               
              
            </div>
       
          
               @if (file_exists($post->image))
                <img  class='p_d_p' src="{{ asset($post->image) }}">

               
                   
               @endif

                   
                
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
        </div>

    </div>
</main>

</x-app-layout>
