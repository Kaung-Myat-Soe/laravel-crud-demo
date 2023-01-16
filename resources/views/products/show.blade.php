@extends('products.layout')

@section('content')
    

    <div id="P2"   class="P_2" >
      <div id="C2"  class="C_1 card_1">
    
        <img   class="c-img" src="" alt="">
        
            <img id="pi"  class="img " src="{{ asset($product->pfimage) }}" alt="Profile">  
           <a href="./pfchange.blade.php" class="pf_chng_btn">
            pf
           </a>
            
       
       
        <p id="name"  class=" u_n">
            {{ $product->name }}
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
            
            <div  class="posts">
                <div  class="all_post">
           
                    <div  class="all_p_owner">
                        <img  class="p_o_p" src="{{ asset($product->image) }}">
                        
                        <a href="{{ route('products.show',$product->id) }}" class="p_o_n">
                            {{ $product->name }} <span  class="span"></span>
                        </a>
                        <div  class="p_opt">
                            ...
                        </div>
                        
                    </div>
        
                    <div  class="post_data">
                        <div  class="p_d_tex">
                        <p>{{ $product->detail }}</p>
                        </div>
        
                            <img  class='p_d_p' src="{{ asset($product->image) }}">
                        
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
        </div>
                
            
    </div>
    </div>


    </div>
@endsection