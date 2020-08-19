@extends('layouts/app')
@section('content')

<table>
  <tr>
    <th>登録日</th>
    <td>{{ $habit->created_at->format('Y/m/d') }}</td>
  </tr>
  <tr>
    <th>タイトル</th>
    <td>{{ $habit->title }}</td>
  </tr>
  @foreach($executions as $execution)
    <tr>
      <th>実施日</th>
      <td>{{ $execution->created_at->format('Y/m/d') }}</td>
    </tr>
    <tr>
      <th>実施内容</th>
      <td>{{ $execution->contents }}</td>
    </tr>
    <tr>
      <th></th>
      <td>
        <a href="{{ route('execution.edit', $execution->id) }}">やった内容を編集する</a>
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        {!! Form::open(['route' => ['execution.destroy', $execution->id], 'method' => 'DELETE'])!!}
          {!! Form::button('削除する', ['type' => 'submit'])!!}
        {!! Form::close()!!}
      </td>
    </tr>
  @endforeach
</table>
<div>
  {!! Form::open(['route' => 'execution.store']) !!}
    {!! Form::hidden('habit_id', $habit->id) !!}
    {!! Form::text('contents', '', ['placeholder' => 'やった内容を記入できます']) !!}
    {!! Form::submit('実施しました！') !!}
  {!! Form::close() !!}
</div>

@endsection
