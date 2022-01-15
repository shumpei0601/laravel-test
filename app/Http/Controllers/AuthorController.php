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
    public function create(Request $request)
    {
        Author::create([
            'content' => $request -> content
        ]);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        
        Author::where($request->content)->update([
            'content' => $request -> content
        ]);
        return redirect('/');
    }
    public function delete(Request $request)
    {
      Author::find($request->id)->delete();
      return redirect('/');
    }
}
