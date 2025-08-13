<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeController extends Controller
{
    public function equipe(){
        $employes = Equipe::all();
        return view("backend_equipe", compact("employes"));
    }
    public function create(){
        return view("create_equipe");
    }
    public function store(Request $request){
        $employe = new Equipe();
        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->telephone = $request->telephone;
        $employe->email = $request->email;
        $employe->poste = $request->poste;
        $employe->role = $request->role;
        $employe->salaire = $request->salaire;
        $employe->save();

        return redirect()->route("backend_equipe");
    }
    public function destroy($id){
        $employe = Equipe::where("id",$id)->delete();
        return redirect()->route("backend_equipe");
    }
    public function page_equipe () {
        return view("equipe");
    }
}
