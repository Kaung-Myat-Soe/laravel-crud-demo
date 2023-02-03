

<x-app-layout class="justify-content-center">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div  class="nav_hold">
        
    </div>
    
        <div id="b2"  class="body-2 justify-content-center"> 
         

            
            <a href="{{ route('posts.index') }}" class=" py-1 px-4 text-sm text-white-600 font-semibold rounded-full border border-dark-200  hover:bg-dark-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2" >Home</a> 
            
        </div>
        <div id="user">
          <div id="pf">
          
          </div>
        
        </div>

    </x-app-layout>


