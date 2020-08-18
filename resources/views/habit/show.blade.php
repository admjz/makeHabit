@extends('layouts/app')
@section('content')

<table>
    <tr>
      <th>登録日</th>
      <td>{{ $habit->created_at->format('Y/m/d') }}</td>
    </tr>
    <tr>
      <th>Title</th>
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
    @endforeach
</table>
<div>
  {!! Form::open(['route' => 'habit.store']) !!}
    {!! Form::submit('実施')!!}
  {!! Form::close() !!}
</div>

@endsection
