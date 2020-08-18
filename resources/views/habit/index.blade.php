@extends('layouts/app')
@section('content')

<div>
  <a href="{{ route('habit.create') }}">新規作成</a>
</div>
@foreach ($habits as $habit)
  <a href="{{ route('habit.show', $habit->id) }}">
    <table>
        <tr>
          <th>登録日</th>
          <td>{{ $habit->created_at->format('Y/m/d') }}</td>
        </tr>
        <tr>
          <th>Title</th>
          <td>{{ $habit->title }}</td>
        </tr>
    </table>
  </a>
  {!! Form::open(['route' => ['habit.destroy', $habit->id], 'method' => 'DELETE'])!!}
    {!! Form::button('削除', ['type' => 'submit'])!!}
  {!! Form::close()!!}
@endforeach

@endsection
