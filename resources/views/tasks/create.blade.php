@extends('layouts.app')

@section('content')

    <h1>仕事新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content', '仕事:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('仕事の追加') !!}
        
    {!! Form::close() !!}

@endsection