<x-app-layout>
    <div >
        <x-slot name="header">
            <h2 class=" text-xl text-gray-800 leading-tight">
                {{ __('Hey ! This is your profile') }}
            </h2>
        </x-slot>

        <div class="py-12">
            {{-- <div class="grid grid-cols-2 gap-4"> --}}
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="font-abril-fatface p-6 text-gray-900">
                            {{ __('Welcome,') }}
                            {{ Auth::user()->name }}
                        </div>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-no-repeat bg-contain bg-center" style="background-image: url(https://cdn.pixabay.com/photo/2016/11/09/23/16/music-1813100_1280.png)">
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="font-abril-fatface p-20 text-gray-900">
                        {{ __('Your biography :') }}
                        {{ Auth::user()->biography }}
                    </div>
                </div>
            </div>
        </div>
    
<section class="text-gray-600 body-font">
    <div class="md:container px-5 py-5 md:mx-auto">
        <div class="flex flex-wrap -m-4">
            
        @foreach ($posts as $post)

<div class="p-4 md:w-1/3" >
    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden background-color-white">
        <div class="w-full">
            <div class="w-full flex p-2">
                <div class="p-2 ">
                  <img 
                    src="https://cdn.pixabay.com/photo/2016/11/09/23/16/music-1813100_1280.png" alt="user avatar" 
                    class="w-10 h-10 rounded-full overflow-hidden"/>
                </div>
                <div class="pl-2 pt-2 ">
                  <a href="/users/{{$post -> User -> id}}" class="text-green-800  md:mb-2 lg:mb-0">
                    <p class="font-bold">{{$post -> User -> name}}</p>
                  </a>
                  <p class="text-xs">{{$post -> created_at}}</p>
                </div>
              </div>
        </div>
        
      
      <img class="h-48 w-48 object-cover object-center"  src={{$post -> featured_image}} alt="album cover"/>
      
      <div class="p-4">
        <h2 class="tracking-widest text-L title-font font-medium text-grey-400 mb-1 uppercase ">{{$post -> title}}</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$post -> content}}</h1>
        <div class="flex items-center flex-wrap ">
          <a href="/posts/{{$post -> id}}" class="text-green-800  md:mb-2 lg:mb-0">
            <p class="inline-flex items-center">Read post
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </p>
          </a>
          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
            <svg class="w-4 h-4 mr-1"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
            24
          </span>
          <span class="text-gray-400 inline-flex items-center leading-none text-sm">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
            </svg>
            89
          </span>
        </div>
        
        
      </div>
    </div>
  </div>
  {{-- <div class="p-4 md:w-1/3" >
    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
        <div class="w-full">
            <div class="w-full flex p-2">
                <div class="p-2 ">
                  <img 
                    src="https://firebasestorage.googleapis.com/v0/b/thecaffeinecode.appspot.com/o/Tcc_img%2Flogo.png?alt=media&token=5e5738c4-8ffd-44f9-b47a-57d07e0b7939" alt="author" 
                    class="w-10 h-10 rounded-full overflow-hidden"/>
                </div>
                <div class="pl-2 pt-2 ">
                  <p class="font-bold">Vipin Bansal</p>
                  <p class="text-xs">2 June 2022</p>
                </div>
              </div>
        </div>
        
      
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://firebasestorage.googleapis.com/v0/b/thecaffeinecode.appspot.com/o/blog.jpg?alt=media&token=271cb624-94d4-468d-a14d-455377ba75c2" alt="blog cover"/>
      
      <div class="p-4">
        <h2 class="tracking-widest text-xs title-font font-bold text-green-400 mb-1 uppercase ">Web development</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">This is a blog template</h1>
        <div class="flex items-center flex-wrap ">
          <a href="/" class="text-green-800  md:mb-2 lg:mb-0">
            <p class="inline-flex items-center">Read Blog
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </p>
          </a>
          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
            <svg class="w-4 h-4 mr-1"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
            24
          </span>
          <span class="text-gray-400 inline-flex items-center leading-none text-sm">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
            </svg>
            89
          </span>
        </div>
        
        
      </div>
    </div>
  </div>
  <div class="p-4 md:w-1/3" >
    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
        <div class="w-full">
            <div class="w-full flex p-2">
                <div class="p-2 ">
                  <img 
                    src="https://firebasestorage.googleapis.com/v0/b/thecaffeinecode.appspot.com/o/Tcc_img%2Flogo.png?alt=media&token=5e5738c4-8ffd-44f9-b47a-57d07e0b7939" alt="author" 
                    class="w-10 h-10 rounded-full overflow-hidden"/>
                </div>
                <div class="pl-2 pt-2 ">
                  <p class="font-bold">Vipin Bansal</p>
                  <p class="text-xs">2 June 2022</p>
                </div>
              </div>
        </div>
        
      
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://firebasestorage.googleapis.com/v0/b/thecaffeinecode.appspot.com/o/blog.jpg?alt=media&token=271cb624-94d4-468d-a14d-455377ba75c2" alt="blog cover"/>
      
      <div class="p-4">
        <h2 class="tracking-widest text-xs title-font font-bold text-green-400 mb-1 uppercase ">Web development</h2>
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">This is a blog template</h1>
        <div class="flex items-center flex-wrap ">
          <a href="/" class="text-green-800  md:mb-2 lg:mb-0">
            <p class="inline-flex items-center">Read Blog
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </p>
          </a>
          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
            <svg class="w-4 h-4 mr-1"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
            24
          </span>
          <span class="text-gray-400 inline-flex items-center leading-none text-sm">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
            </svg>
            89
          </span>
        </div>
        
        
      </div>
    </div>
  </div> --}}
<!--End here-->
@endforeach
        </div>
    </div>
</section>
    </div>
</x-app-layout>
