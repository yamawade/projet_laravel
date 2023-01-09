<?php
namespace App\Http\Controllers;

use App\Http\Controllers\ListeprojetController;
use App\Models\Projet;
use App\Models\listeprojet;
use Illuminate\Http\Request;

class ListeprojetController{
    
    public function index(){

        $listeprojet = Projet::all();
        return view("listeprojet",compact('listeprojet'));

    }

    public function detail_projet($id){
        $detail = Projet::find($id);
       
        return view('detail',compact('detail'));

    }
}



