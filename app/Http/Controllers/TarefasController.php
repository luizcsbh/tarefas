<?php

namespace App\Http\Controllers;

use App\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{

    public function index()
    {

        return Tarefa::all();

    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'require|max:255',
            'complete'=>'required'
        ]);

        $tarefas = Tarefa::create([
            'name'=>$request->input('name'),
            'complete'=>$request->input('complete')
        ]);

        return $tarefas;
    }

    public function show(Tarefa $tarefa){

        return $tarefa;

    }

    public function update(Request $request, Tarefa $tarefa){
    
        $request->validate([
            'name'=>'require|max:255'
        ]);

        $tarefa->name = $request->input('name');

        $tarefa->save();

        return $tarefa;
    }
    
    public function destroy(Tarefa $tarefa){

        $tarefa->delete();

        return response()->json(['success'=>true]);
    }
}
