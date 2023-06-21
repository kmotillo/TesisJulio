<?php

namespace App\Http\Controllers;
use App\Models\Acceso;
use App\Models\Persona;

use Illuminate\Http\Request;

class AccesoController extends Controller
{
    public function store(Request $request){
        Acceso::create([
            "nombre" => $request->nombre,
            "apellido" => $request->apellido,
            "cedula" => $request->cedula

        ]);
        return redirect('/dashboard');
    }
    public function list(){
        $accesos= Acceso::where('estado', true)->get();
        foreach ($accesos as $item){
            $item->persona = Persona::find($item->user_id)->nombre.' '.Persona::find($item->user_id)->apellido;
        }

        return view ('acceso.list', compact('accesos'));
    }
}
