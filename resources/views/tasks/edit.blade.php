@extends('layouts.app')

@section('content')

    <h1>{{ $task->id }}の仕事編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
        {!! Form::label('content', '仕事:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス') !!}
        {!! Form::text('status') !!}
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}

@endsection