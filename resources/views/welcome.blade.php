<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/app.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            
        </style>
    </head>
    <body class="antialiased">
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
    </body>
</html>
