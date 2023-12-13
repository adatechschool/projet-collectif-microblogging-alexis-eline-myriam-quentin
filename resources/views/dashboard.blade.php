<x-app-layout>
    <div class="bg-gradient-to-r from-purple-500  to-yellow-200">
        <x-slot name="header">
            <h2 class="font-monoton text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="grid grid-cols-2 gap-4">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> --}}
                        <div class="font-abril-fatface p-6 text-gray-900">
                            {{ __('Welcome,') }}
                            {{ Auth::user()->name }}
                        </div>
                    {{-- </div> --}}
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

        <div class="grid grid-cols-4 gap-4">
            @foreach ($posts as $post)
            <div>{{$post -> User -> name}}</div>
            <div>{{$post -> title}}</div>
            <div><img src={{$post -> featured_image}}></div>
            <div>{{$post -> user_id}}</div>   
            @endforeach
        </div>
    </div>
</x-app-layout>
