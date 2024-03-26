<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function showAll(){
        $lista = Veiculo::all();
        return view('veiculos.list', ['lista'=> $lista]);
    }
    public function compose(){
        return view('veiculos.compose');
    }
    public function store(Request $request){
        Veiculo::create([
            'fabricante' => $request->fabricante,
            'modelo' => $request->modelo,
            'cavalos' => $request->cavalos
        ]);
        return $this->showAll();
    }
    public function edit(Request $request){
        $veiculo = Veiculo::find($request->id);
        return view('veiculos.compose', ['veiculo' => $veiculo]);
    }
    
}
