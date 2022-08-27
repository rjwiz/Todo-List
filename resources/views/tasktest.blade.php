@extends('layouts.layout')

@section('content')
<table>
  <tr>
    <th>tasks</th>
  </tr>
  @foreach ($tasks as $task)
  <tr>
    <td>
      {{$task->getTitle()}}
    </td>
  </tr>
  @endforeach
</table>
@endsection