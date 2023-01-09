<?php
namespace App\Http\Controllers;
use App\Http\Controllers\ProjetController;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController{
    function projet(){

        $projet = Projet::all();
        return view("projet", ["projet" => $projet]);
        
        // $projet = projet::find(1);

        // $phase = $projet->phase()->get();
        // return view("liste", ["projet" => $projet]);
        
    }

    public function listeprojet(Request $request){
        $projet = new Projet();

        $projet->nom = $request->nomprojet;
        $projet->date_debut = $request->date_debut;
        $projet->date_fin = $request->date_fin;
        $projet->description = $request->desc;

        $projet->save();
       
        return redirect()->route("projet");

    }
}



