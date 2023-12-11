{{-- Création d'une boucle dans la table post pour afficher le titre, le user_id et le nom de l'utilisateurice
La syntaxe '-> User -> name' permet de récupérer le nom du user grâce à la relation entre les tables posts et users --}}

<ul>
    @foreach ($posts as $post)
    <li>{{$post -> title}}</li>
    <li><img src={{$post -> featured_image}}></li>
    <li>{{$post -> user_id}}</li>   
    <li>{{$post -> User -> name}}</li>
    @endforeach
    
</ul>