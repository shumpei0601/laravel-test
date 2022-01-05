@extends('layouts.default')
<style>
  .purple {
    background-color: #000080;
    height: 100vh;
    position: relative;
  }
  .white {
    background-color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60%;
    padding: 20px;
    border-radius: 20px;
  }
  .text {
    width: 87%;
  }
  table {
    width: 100%;
  }
  td {
    text-align: center;

  }
  .update {
     border-radius:5px;
     border: 1px solid #ff9900;
     color: #ff9900;
     background: white;
  }
  .update:hover{
    background:#ff9900;
    color: white;
  }
  .delete {
    border-radius:5px;
     border: 1px solid #33ffcc;
     color: #33ffcc;
     background: white;
  }
  .delete:hover {
    background:#33ffcc;
    color: white;
  }
  .add {
    border-radius:5px;
     border: 1px solid #ff66ff;
     color: #ff66ff;
     background: white;
  }
  .add:hover{
    background:#ff66ff;
    color: white;
  }
  .text {
    resize:none;
    border-radius: 5px;
  }
</style>
@section('title'. 'index.blade.php')

@section('content')
<div class="purple">
  <div class="white">
    <h1>Todo List</h1>
    <p>
    <textarea name="textarea" class="text" cols="30" rows="1"></textarea>
    <input type="submit" class="add" value="追加">
    </p>
    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      <tr>
        <td></td>
        <td>
          <textarea name="textarea" class="text"  cols="30" rows="1"></textarea>
        </td>
        <td>
          <input type="submit" class="update" value="更新">
        </td>
        <td>
          <input type="submit" class="delete" value="削除">
        </td>
      </tr>
    </table>
  </div>
</div>
@endsection