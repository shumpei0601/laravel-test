<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index()
    {
        $items = Author::all();
        return view('index', ['items' => $items]);
    }
    public function edit(Request $request)
    {
      $param = ['id' => $request->id];
      $item = DB::select('select * from authors where id = :id', $param);
        return view('/todo/create', ['form' => $item[0]]);
    }
    public function create(Request $request)
    {
      $param = [
          'id' => $request->id,
          'content' => $request->content,
      ];
      DB::create('create authors set content =:content  where id =:id', $param);
        return redirect('/');
    }
    public function update(Request $request)
    {

    }
    public function delete(Request $request)
    {

    }
}
