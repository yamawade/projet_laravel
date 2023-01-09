<?php
namespace App\Http\Controllers;
use App\Http\Controllers\EtudiantController;
use App\Models\Etudiant;

class EtudiantController{
    function liste(){

        $etudiants = Etudiant::all();
        return view("liste", ["etudiants" => $etudiants]);

        
    //     return view('liste',['Etudiants'=>$etudiant]);
    //    // dd($etudiant);
    }
}