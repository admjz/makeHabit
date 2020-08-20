@extends('layouts/app')
@section('content')

<div>
  <a href="{{ route('habit.create') }}">習慣にしたいことを新規作成する</a>
</div>
@foreach ($habits as $habit)
  <a href="{{ route('habit.show', $habit->id) }}">
    <table>
        <tr>
          <th>開始日</th>
          <td>{{ $habit->created_at->format('Y/n/d') }}</td>
        </tr>
        <tr>
          <th>タイトル</th>
          <td>{{ $habit->title }}</td>
        </tr>
        <tr>
          <th>最新の実施日</th>
          <td>
              {{ $executions->where('habit_id', "{$habit->id}")
                            ->pluck('created_at')
                            ->last()
                            ->format('Y/m/d') }}
          </td>
        </tr>
        <tr>
          <th></th>
          <td>{{ $executions->where('habit_id', "{$habit->id}")
                            ->pluck('created_at')
                            ->last()
                            ->diff(date("H:i"))
                            ->format('%h時間%i分' . '経過') }}
          </td>
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
