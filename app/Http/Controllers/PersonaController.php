<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
class PersonaController extends Controller
{
    public function index(){
      $per = Persona::all();
      //dd($personas);
      return view('persona.index')->with('personas',$per);
    }
    public function create(){
      return view('persona.create');
    }
}
