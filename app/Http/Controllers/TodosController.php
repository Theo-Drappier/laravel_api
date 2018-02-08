<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Todos;

class TodosController extends Controller
{
  public function read () {
    return [
      'success' => true,
      'row' => Todos::all()
    ];
  }

  public function create (Request $request) {
    $label = $request->label;
    $todo = new Todos;
    $todo->label = $label;
    $todo->save();
    $id = $todo->id;
    $result = Todos::where('id', $id)->first();
    return [
      'success' => true,
      'row' => $result
    ];
  }

  public function update (Request $request, $id) {
    //$id = intval($request->id);
    $isDone = $request->isDone;
    $todo = Todos::find($id);
    $todo->isDone = $isDone;
    $todo->save();
    return [
      'success' => true,
      'row' => $todo
    ];
  }

  public function delete (Request $request, $id) {
    $todo = Todos::find($id);
    $todo->delete();
    return ['success' => true];
  }
}
