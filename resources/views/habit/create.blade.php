@extends('layouts/app')
@section('content')

<div>習慣にしたいことを登録しましょう</div>
{!! Form::open(['route' => 'habit.store']) !!}
  <div>
    {!! Form::text('title', '', ['placeholder' => '習慣にしたいことを入力してください']) !!}
    <span></span>
  </div>
  <div>
    {!! Form::submit('追加') !!}
  </div>
{!! Form::close() !!}

@endsection
