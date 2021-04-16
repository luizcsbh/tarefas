<?php
use App\Models\Tarefa;
use Illuminate\Http\Request;

Route::get("tarefas", "TarefasController@index");
Route::get("tarefas/{tarefa}", "TarefasController@show");
Route::post("tarefas", "TarefasController@store");
Route::patch("tarefas/{tarefa}", "TarefasController@update");
Route::delete("tarefas/{tarefa}", "TarefasController@destroy");