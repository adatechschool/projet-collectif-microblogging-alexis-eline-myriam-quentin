<form action="/newpost" method="post">
    @csrf
    <input id="content" type="text" name="content" placeholder="Paragraphe">
    {{-- <input type="text" name="featured_image" placeholder="Image"> --}}
    <button type="submit" value="envoyer">Soumettre</button>
</form>