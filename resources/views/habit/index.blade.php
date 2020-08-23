@extends('layouts/app')
@section('content')

<div>
  <a href="{{ route('habit.create') }}"><i class="fas fa-plus-square fa-2x"></i></a>
</div>
@foreach ($habits as $habit)
  <a href="{{ route('habit.show', $habit->id) }}">
    <table>
        <tr>
          <th>開始日</th>
          <td>{{ $habit->created_at->format('Y/m/d') }}</td>
        </tr>
        <tr>
          <th>タイトル</th>
          <td>{{ $habit->title }}</td>
        </tr>
        <tr>
          <th>最新の実施日</th>
          <td>
              <?php $execution = $executions->where('habit_id', "{$habit->id}")
                                            ->pluck('created_at')
                                            ->last();
              ?>
              @if (isset($execution))
                {{ $execution->format('Y/m/d') }}
              @else
                まだありません
              @endif
          </td>
        </tr>
        <tr>
          <th></th>
          <td>
              @if (isset($execution))
                {{ $execution->diff(date("m/d H:i"))->format('%d日%h時間%i分  経過') }}
              @endif
          </td>
        </tr>
    </table>
  </a>
  <div>
    <a href="{{ route('habit.edit', $habit->id) }}"><i class="fas fa-edit fa-2x fa-fw"></i></a>
  </div>
  <div>
    {!! Form::open(['route' => ['habit.destroy', $habit->id], 'method' => 'DELETE'])!!}
      {!! Form::button('<i class="fas fa-trash-alt fa-2x fa-fw"></i>', ['type' => 'submit'])!!}
    {!! Form::close()!!}
  </div>
@endforeach

@endsection
