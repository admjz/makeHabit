@extends('layouts/app')
@section('content')

<div>
  <a href="{{ route('habit.create') }}">習慣にしたいことを新規作成する</a>
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
  <div>
    <a href="{{ route('habit.edit', $habit->id) }}">タイトルを編集する</a>
  </div>
  <div>
    {!! Form::open(['route' => ['habit.destroy', $habit->id], 'method' => 'DELETE'])!!}
      {!! Form::button('この習慣を削除する', ['type' => 'submit'])!!}
    {!! Form::close()!!}
  </div>
@endforeach

@endsection
