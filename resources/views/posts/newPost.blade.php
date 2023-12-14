{{-- <form action="/newpost" method="post">
    @csrf
    <input id="content" type="text" name="content" placeholder="Paragraphe">
    <input type="text" name="featured_image" placeholder="Image">
    <button type="submit" value="envoyer">Soumettre</button>
</form> --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Feed : ') }}
        </h2>
    </x-slot>

    <form class="container" style='margin-top:2rem' method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{auth() -> id()}}">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Title</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="title"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Picture</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="featured_image"></textarea>
        </div>
    
        <x-primary-button type="submit" class="btn btn-primary">New Post</x-primary-button>
    </form>
</x-app-layout>