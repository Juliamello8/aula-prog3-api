<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulaController extends Controller
{
    //GET
    public function show($id = null)
    {
        if($id){
            $aulas = \App\Models\Aula::find($id);
        }else{
            $aulas = \App\Models\Aula::all();
        }
        return response($aulas, 200, [
            'Content-Type' => 'application/json'
        ]); 
    }
    //POST
    public function create(Request $request)
    {
        if(isset($request->nome)){
            $aula = new \App\Models\Aula();
            $aula->nome = $request->nome;
            $aula->save();
            return response($aula, 201, [
                'Content-Type' => 'application/json'
            ]);
        }
        return response([
            'error' => 'nome da aula não foi informado'
        ], 404, [
            'Content-Type' => 'application/json'
        ]);
    }
    //PUT
    public function update(Request $request, $id)
    {
        if(isset($request->nome) && $id) {
            $aula = \App\Models\Aula::find($id);
            $aula->nome = $request->nome;
            $aula->save();
            return response($aula, 200, [
                'Content-Type' => 'application/json'
            ]);
        }
        return response([
            'error' => 'nome da aula ou id não informado'
        ], 404, [
            'Content-Type' => 'application/json'
        ]);
    }
    //DELETE
    public function destroy($id)
    {
        if($id) {
            $aula = \App\Models\Aula::find($id);
            $aula->delete();
            return response($aula, 200, [
                'Content-Type' => 'application/json'
            ]);
        }
        return response([
            'error' => 'id não informado'
        ], 404, [
            'Content-Type' => 'application/json'
        ]);
    }
}