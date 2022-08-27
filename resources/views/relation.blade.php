@extends('layouts.layout')

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>タスク名</th>
    <th>タグ</th>
  </tr>
  @foreach ($tasks as $task)
  <tr>
        <td>{{$task->id}}</td>
        <td>{{$task->name}}</td>
        <td>{{$task->tag_id->tag_name}}</td>
  </tr>
  @endforeach
</table>
@endsection