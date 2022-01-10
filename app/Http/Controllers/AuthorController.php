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
      $validate_rule = [
        'content' => 'required'
      ];
      $this->validate($request, $validate_rule);
      $param= [
        'content' => $request->content,
      ];
      DB::table('authors')->insert($param);
      return redirect('/');
    }
    public function edit()
    {
      return view('update', ['form' =>$item]);
    }
    public function update(Request $request)
    {
      $param = [
        'id' => $request->id,
        'content' => $request->content
      ];
      DB::table('authors')->where('id', $request->id)->update($param);
      return redirect('/');
    }
    public function remove(Request $request)
    {
        $item = DB::table('authors')->where('id', $request->id)->get();
        return view('delete', ['form' => $item]);
    }
    public function delete(Request $request)
    {
        $param = ['id' => $request->id];
        DB::table('authors')->where('id', $request->id)->delete();
        return redirect('/');
    }
}
