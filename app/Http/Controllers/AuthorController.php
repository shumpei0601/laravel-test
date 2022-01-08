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
    public function delete(Request $request)
    {
        $item = DB::table('authors')->where('id', $request->id)->first();
        return view('delete', ['form' => $item]);
    }
    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::table('authors')->where('id', $request->id)->delete();
        return redirect('/');
    }
    public function post(Request $request)
    {
      $validate_rule = [
        'content' => 'required'
      ];
      $this->validate($request, $validate_rule);
      return view('index', ['txt' => '正しい入力です']);
    }
}
