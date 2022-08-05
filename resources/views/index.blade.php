@extends('layouts.layout')

@section('content')
    <p class="title">Todo List</h2>
    <div class="todo">
        <div class="task-store">
            <form method="post" action="{{ route('store') }}"> 
            @csrf 
                <input type="text" name="name" class="task-store__input">
                <input type="submit" value="追加" class="task-store__btn">
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>作成日</th>
                    <th>タスク名</th>
                    <th>更新</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>
                        {{ $task->created_at }}
                    </td>
                    <form action="{{ route('update', ['id' => $task->id]) }}" method="post" class="task-update__inner">
                        @csrf
                    </form>
                    <input type="hidden" value="{{ old('name', $task->name) }}" name="_token">
                    <td>
                        <input type="text" value="{{ old('name', $task->name) }}"
                        name="name">
                    </td>
                    <td>
                        <button class="task-update__button">更新</button>
                    </td>
                        <td>
                        <form action="{{ route('delete', ['id' => $task->id]) }}" method="post">
                        @csrf
                            <button type="submit" class="task-delete__btn">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection