<?php

namespace App\Http\Controllers;
/* App\Http\Controllers\LatifaController
 */use Illuminate\Http\Request;

class LatifaController extends Controller
{
    public function latifa(){
       return view('latifa');
    }
    public function Doctor(){
        return view('Doctor');
     }
    public function Skin(){
        return view('Skin');
     }
}
