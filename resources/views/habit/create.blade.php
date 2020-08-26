@extends('layouts/app')
@section('content')

<div class="habit-container">
  <h2 class="create-habit_title">習慣にしたいことを入力してください</h2>
  <div class="margin-top">
    {!! Form::open(['route' => 'habit.store']) !!}
      <div>
        {!! Form::text('title', '', ['placeholder' => '例)ランニング', 'class' => 'input-area']) !!}
        @if ($errors->has('title'))
          <span class="error-message">{{ $errors->first('title') }}</span>
        @endif
      </div>
      <div class="margin-top">
        {!! Form::button('追加', ['type' => 'submit', 'class' => 'btn btn-add']) !!}
      </div>
    {!! Form::close() !!}
  </div>
</div>

@endsection
