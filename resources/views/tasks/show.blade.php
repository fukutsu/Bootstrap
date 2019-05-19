@extends('layouts.app')

@section('content')

    <h1>{{ $task->id }}の仕事詳細ページ</h1>
    
    <p>{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'この仕事を編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
        
@endsection