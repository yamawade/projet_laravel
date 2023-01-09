<?php
namespace App\Http\Controllers;
use App\Http\Controllers\PhaseController;
use App\Models\Phase;
use Illuminate\Http\Request;

class PhaseController{
    function phase(){

        $phase = Phase::all();
        return view("phase", ["phase" => $phase]);
    
        
    }

    public function listephase(Request $request){
        $phase = new Phase();

        $phase->nom = $request->nomphase;
        $phase->duree = $request->dureephase;
        $phase->priorite = $request->priorite;

        $phase->save();
       
        return redirect()->route("phase");

    }
}



