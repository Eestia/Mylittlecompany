@extends("Layouts.back");

@section("title", "create equipe");

@section("back")
<div class="container d-flex justify-content-center mt-5 mb-5">

    <form class="form-control w-50 d-flex flex-column gap-2" action="{{ route("store_equipe") }}" method="POST">
        <h1>Ajouter un employé</h1>
        @csrf
        <input class="form-control" type="text" name="nom" id="" placeholder="nom">
        <input class="form-control" type="text" name="prenom" id="" placeholder="prenom">
        <input class="form-control" type="number" name="telephone" id="" placeholder="telephone">
        <input class="form-control" type="email" name="email" id="" placeholder="mail">
        <select class="form-control" name="poste" id="">
            <option value="">Choisis un poste</option>
            <option value="logistique">logistique</option>
            <option value="reception">Reception</option>
            <option value="comptabilité">Comptabilité</option>
            <option value="vente">Vente</option>
            <option value="direction">Direction</option>
        </select>
        <select class="form-control" name="role" id="">
            <option value="">Choisis un role</option>
            <option value="ouvrier polyvalent">Ouvrier polyvalent</option>
            <option value="employé polyvalent">Employé polyvalent</option>
            <option value="comptable">Comptable</option>
            <option value="assistant du régional manager">Assistant du régional manager</option>
            <option value="régional manager">Régional manager</option>
        </select>
        <input class="form-control" type="number" name="salaire" id="" placeholder="salaire">
        <button class="btn btn-primary" type="submit">Confirmer</button>
    </form>
</div>
@endsection