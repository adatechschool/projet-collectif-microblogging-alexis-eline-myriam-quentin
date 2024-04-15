
<x-app-layout>
    <body>
        <section class="text-gray-600 body-font">
            <div class="md:container px-5 py-5 md:mx-auto">
              <div class="flex flex-wrap -m-4">
    <!--start here-->
    @foreach ($comments as $comment)
    
    <div class="p-4 md:w-1/3" >
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <div class="w-full">
                <div class="w-full flex p-2">
                    <div class="p-2 ">
                      <img 
                        src="https://cdn.pixabay.com/photo/2016/11/09/23/16/music-1813100_1280.png" alt="author" 
                        class="w-10 h-10 rounded-full overflow-hidden"/>
                    </div>
                    <div class="pl-2 pt-2 ">
                      <p class="font-bold">{{$comment -> content}}</p>
                    </div>
                  </div>
            </div>
            
          
          <div class="p-4">
            <div class="flex items-center flex-wrap ">
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
    
    @endforeach
              </div>
            </div>
          </section>
    </body>
    </x-app-layout>
    </html>
    
    