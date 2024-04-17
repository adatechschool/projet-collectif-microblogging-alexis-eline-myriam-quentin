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
                    <div class="pl-2 pt-2 ">
                      <a href="/users/{{$comment -> User -> id}}" class="text-green-800  md:mb-2 lg:mb-0">
                        <p class="font-bold">{{$comment -> User -> name}}</p>
                      </a>
                      <p class="text-xs">{{$comment -> created_at}}</p>
                    </div>
                  </div>
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
    
    