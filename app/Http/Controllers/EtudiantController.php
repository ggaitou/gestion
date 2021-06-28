<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Classe;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    

    public function index () {
        $etudiants= Etudiant::orderBy("nom","asc")->get();
        return view('pages.app_etudiant', compact("etudiants"));
    }
//affiche le formulaire de creation des employé
    public function create () {
        $classes=Classe::all();
        //$etudiants= Etudiant::orderBy("nom","asc")->get();
        return view('pages.app_add_etudiant', compact("classes"));
    }
//insert les etudiants en base
    public function store (Request $request) {
        
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "classe_id"=>"required"
        ]);

        //avec definition du fillable dans le model 
        Etudiant::create($request->all());
        /*
        sans fillable
        Etudiant::create(
            [
                    "nom"=>$request->nom,
                    "prenom"=>$request->prenom,
                    "classe_id"=>$request->classe_id
            ]);*/
        //return view('pages.app_add_etudiant', compact("classes"));
    
        //message de confirmation
    return back()->with("success", "Etudiant ajouté avec succes");
    }
}
