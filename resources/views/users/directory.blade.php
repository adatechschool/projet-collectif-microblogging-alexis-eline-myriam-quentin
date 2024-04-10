
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div class="container">
        <div class="row">
            @foreach ($users as $user)
          <div class="col">
                <div class="card m-10 shadow p-3 bg-body rounded">
                <img src="https://cdn.pixabay.com/photo/2016/11/09/23/16/music-1813100_1280.png" class="card-img-top" style="width: 10em;display: flex; justify-content: center; align-self: center" alt="...">
                    <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center" style="font-size: 30px; text-transform:uppercase; background: #f4f1f1; border-radius: 10px">{{$user -> name}}</h5>
                    <p class="card-text d-flex justify-content-center" style="text-align: justify; padding-top: 10px">{{$user -> biography}}</p>
                    </div>
                    <a href="/users/{{$user -> id}}" class="btn btn-secondary">Go to this profile</a>
                </div>
            </div>
        @endforeach
        </div>
      </div>
</x-app-layout>



