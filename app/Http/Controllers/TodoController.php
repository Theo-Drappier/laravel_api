<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    /**
     * Return the json of a todolist.
     *
     * @return jsonObject
     */
    public function show()
    {
      $jsonObject = [
        [
          'id' => 1,
          'name' => "Todo1"
        ],
        [
          'id' => 2,
          'name' => "Todo2"
        ]
      ];

      return $jsonObject;
    }
}
