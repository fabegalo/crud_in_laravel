<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pacientes;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function all()
    {
        $p = Pacientes::all();
        return response()->json($p, 200);
    }

    public function add(Request $request)
    {
        $name = $request['nome'];
        $age = $request['idade'];
        $test = $request['teste'];

        $bool = Pacientes::insert([
            'nome' => $name,
            'idade' => $age,
            'teste' => $test
        ]);

        if($bool){
            return response('', 201);
        }else {
            return response('', 500);
        }
    }

    public function edit(Request $request)
    {
        $id = $request['id'];
        $name = $request['nome'];
        $age = $request['idade'];
        $test = $request['teste'];

        $p = Pacientes::find($id);

        $p->nome = $name;
        $p->idade = $age;
        $p->teste = $test;

        $p->save();

        if($p){
            return response('', 200);
        }else {
            return response('', 500);
        }
    }

    public function delete($id)
    {
        $p = Pacientes::find($id);
        $p->delete();

        if($p){
            return response('', 200);
        }else {
            return response('', 500);
        }
    }
}