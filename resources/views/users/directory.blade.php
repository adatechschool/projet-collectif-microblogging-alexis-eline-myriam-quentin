{{-- Création d'une boucle dans la table user pour afficher nom et la biographie --}}
<ul>
    @foreach ($users as $user)
    <li>{{$user -> name}}</li>
    <li>{{$user -> biography}}</li>  
    @endforeach
    
</ul>