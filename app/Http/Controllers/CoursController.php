<?php
namespace App\Http\Controllers;
use App\Http\Controllers\CoursController;
use App\Models\Cours;

class CoursController{
    function lister(){

        $cour = new Cours();
        $cour-> id = 1;
        $cour-> nom = "PHP";
        $cour-> dure = 30;
       
        $cour-> id1 = 2;
        $cour-> nom1 = "JAVA";
        $cour-> dure1 = 60;

        $cour-> id2 = 3;
        $cour-> nom2 = "JAVASCRIPT";
        $cour-> dure2 = 10;
        return view('cours',['yama'=>$cour]);
        // $cour = new Cours(1,"JAVA", 30);
        // $cour1 = new Cours(2,"PHP", 60);
        // $cour2 = new Cours(3,"JAVASCRIPT", 10);
       
        // $mat=[$cour, $cour1, $cour2];
        // return view('cours',['yama'=>$mat]);
       
        
        
    }
}