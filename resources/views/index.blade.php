@extends('layouts.layout')

@section('content')
    <div class='head'>
        <p class="title">Todo List</p>
        <div class="auth">
            <p class="auth-user"><?php $user = Auth::user(); ?>「{{ $user->name }}」でログイン中</p>
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <input type="submit" value="ログアウト" class="logout__btn">
            </form>
        </div>
    </div>
    <div class="task-search__btn">
        <a href="{{ url('/search') }}">タスク検索</a>
    </div>
    <div class="todo">
        @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            {{ $errors->first('name') }}
        </span>
        @endif
            <form method="post" action="{{ route('store') }}">
            @csrf
                <input type="text" name="name" class="task-store__input">
                <select class="category-control" name="category">
                    @foreach (Config::get('category.tag_name') as $key =>$val)
                        <option value="{{ $key }}">{{ $val }}</option>
                    @endforeach
                </select>
                <input type="submit" value="追加" class="task-store__btn">
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>作成日</th>
                    <th>タスク名</th>
                    <th>タグ</th>
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
                    <form action="{{ route('update', [$task->id]) }}" method="post">
                        @csrf
                        <td>
                            <input type="text" value="{{ old('name', $task->name) }}" name='name' class="task-update__input">
                        </td>
                        <td>
                            <select class="category-control" value="{{ old('category', $task->category) }}" name="category">
                                @foreach (Config::get('category.tag_name') as $key =>$val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="submit" value="更新" class="task-update__btn">
                        </td>
                    </form>
                    <td>
                        <form action="{{ route('delete', ['id' => $task->id]) }}" method="post">
                        @csrf
                            <input type="submit" class="task-delete__btn" value="削除">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection