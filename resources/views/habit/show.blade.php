@extends('layouts/app')
@section('content')

<div class="habit-container">
  <h2 class="container_title">{{ $habit->title }}</h2>
  <div class="margin-top50">
    {!! Form::open(['route' => 'execution.store']) !!}
      {!! Form::hidden('habit_id', $habit->id) !!}
      <div>
        {!! Form::textarea('contents', '', ['class' => 'input-area', 'placeholder' => '例)腹筋50回、腕立て伏せ50回 &#13;&#10;&#13;&#10;※何も記入しなくても記録できます', 'rows' => 5]) !!}
        @if ($errors->has('contents'))
          <span class="error-message">{{ $errors->first('contents') }}</span>
        @endif
      </div>
      <div class="margin-top30">
        {!! Form::button('記録する！', ['type' => 'submit', 'class' => 'btn btn-add']) !!}
      </div>
    {!! Form::close() !!}
  </div>
  @foreach($executions as $execution)
    <div class="execution-box">
      <div class="execution-box_inner">
        <div class="execution-date">{{ $execution->created_at->format('Y/m/d') }}</div>
        <div class="execution-contents margin-top30">
          @if (!empty($execution->contents))
            {{ $execution->contents }}
          @else
            &nbsp;
          @endif
          </div>
      </div>
      <div class="btn edit-form margin-top30">
        <a href="{{ route('execution.edit', $execution->id) }}"><i class="fas fa-edit edit-execution"></i></a>
      </div>
      <div class="delete-form margin-top30">
        {!! Form::open(['route' => ['execution.destroy', $execution->id], 'method' => 'DELETE'])!!}
          {!! Form::button('<i class="fas fa-trash-alt fa-2x"></i>', ['type' => 'submit', 'class' => 'btn delete-btn'])!!}
        {!! Form::close()!!}
      </div>
    </div>
  @endforeach
</div>

@endsection
