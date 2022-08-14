<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class evenement extends Controller
{
    public function add(){
        return view('evenement/add');
    }
    public function save(request $id){
        $even = new evenement;
        $even-> nom = $id->name;
        $even-> date_demarrage = $id->date_demarrage;
        $even-> date_fin = $id->date_fin;
        $even-> description = $id->description;
        $even-> save();
        echo "successfully done";
    }
    public function index(){
        $evens= evenement:: all();
        return view ('produit/index',compact('evens'));
    }
}

