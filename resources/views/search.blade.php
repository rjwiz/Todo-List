@extends('layouts.layout')

@section('content')
    <div class='head'>
        <p class="title">タスク検索</p>
        <div class="auth">
            <p class="auth-user"><?php $user = Auth::user(); ?>「{{ $user->name }}」でログイン中</p>
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <input type="submit" value="ログアウト" class="logout__btn">
            </form>
        </div>
    </div>
    <div class="todo">
        @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            {{ $errors->first('name') }}
        </span>
        @endif
        <form method="post" action="{{ route('find') }}">
            @csrf
            <input type="text" name="input" value="{{ $input }}" class="task-store__input">
            <input type="submit" value="検索" class="task-store__btn">
        </form>
    </div>
    <table class="table">
    @if (@isset($tasks))
        <tr>
            <th>id</th>
            <th>name</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>tag_id</th>
        </tr>
        <tr>
            <td>
                {{$task->id}}
            </td>
            <td>
                {{$task->name}}
            </td>
            <td>
                {{$task->created_at}}
            </td>
            <td>
                {{$task->updated_at}}
            </td>
            <td>
                {{$task->tag_id}}
            </td>
        </tr>
    </table>
    @endif
    <div class="back__btn">
        <a href="{{ url('/home') }}">戻る</a>
    </div>
@endsection