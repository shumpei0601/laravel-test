<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index()
    {
       $items = DB::table('authors')->get();
       return view('index', ['items' => $items]);
    }
    
    public function add()
    {
      return view('create');
      //ここ微妙
    }
    public function create(Request $request)
    {
      $param= [
        'content' => $request->content,
      ];
      DB::table('authors')->insert($param);
      return redirect('/');
    }
}
