@extends('layouts/app')
@section('content')

<div>新しいタイトルを入力してください</div>
{!! Form::open(['route' => ['habit.update', $habit->id], 'method' => 'PUT']) !!}
  <div>
    {!! Form::text('title', $habit->title) !!}
    <span></span>
  </div>
  <div>
    {!! Form::submit('更新する') !!}
  </div>
{!! Form::close() !!}

@endsection