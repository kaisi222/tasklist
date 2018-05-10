@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <p>{{ $task->content }}</p>
    
    {!! Form::model($task, ['route' => ['tasks.edit', $task->id], 'method' => 'edit']) !!}
        {!! Form::submit('編集') !!}
    {!! Form::close() !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    
@endsection