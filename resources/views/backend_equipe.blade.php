@extends("Layouts.back");

@section("title", "create equipe");

@section("back")
    <h1>Page d'équipe backend</h1>
    <a class="btn btn-primary" href="{{ route("create_equipe") }}">Ajouter un nouvel employé</a>
        @if (count($employes) > 0)
            
        @foreach ($employes as $employe)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$employe["nom"]." ".$employe["prenom"]}}</h5>
                <p class="card-text">{{$employe["telephone"]}}</p>
                <p class="card-text">{{$employe["email"]}}</p>
                <p class="card-text">{{$employe["poste"]}}</p>
                <p class="card-text">{{$employe["role"]}}</p>
                <p class="card-text">{{$employe["salaire"]}}€</p>
                <form action="{{ route("destroy_equipe", $employe->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
        @endforeach
        @else
        <h2>Pas encore d'employés</h2>
        @endif
@endsection