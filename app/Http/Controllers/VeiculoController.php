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
            'cavalos' => $request->cavalos,
            'portas' => $request->portas,
            'marchas' => $request->marchas
        ]);
        return redirect('/veiculos');
    }
    public function edit(Request $request){
        $veiculo = Veiculo::find($request->id);
        return view('veiculos.compose', ['veiculo' => $veiculo]);
    }
    public function update(Request $request) {
        $veiculo = Veiculo::find($request->id);
        $veiculo->fabricante = $request->fabricante;
        $veiculo->modelo = $request->modelo;
        $veiculo->cavalos = $request->cavalos;
        $veiculo->portas = $request->portas;
        $veiculo->marchas = $request->marchas;
        $veiculo->save();
        //return $this->showAll();
        return redirect('/veiculos');
    }

    public function delete(Request $request) {
        $veiculo = Veiculo::find($request->id);
        $veiculo->delete();

        //return $this->showAll();
        return redirect('/veiculos');
    }
}
