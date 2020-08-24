@extends('layouts/app')
@section('content')

<div class="habit-containor">
  <div class="create-habit">
    <a href="{{ route('habit.create') }}"><i class="fas fa-plus-square fa-3x"></i></a>
  </div>
  <div class="habit-wrapper">
    @foreach ($habits as $habit)
      <div class="habit-box">
        <div class="habit-show">
          <a href="{{ route('habit.show', $habit->id) }}">
            <table class="habit-table">
              <tr>
                <td colspan="2">{{ $habit->title }}</td>
              </tr>
              <tr></tr>
              <tr>
                <?php $execution = $executions->where('habit_id', "{$habit->id}")
                                                  ->pluck('created_at')
                                                  ->last();
                    ?>
                <td colspan="2">
                    @if (isset($execution))
                      {{ $execution->diff(date("m/d H:i"))->format('%d日と%h時間  経過') }}
                    @endif
                </td>
              </tr>
              <tr>
                <th>最新の実施日</th>
                <td>
                    @if (isset($execution))
                      {{ $execution->format('Y/m/d') }}
                    @else
                      まだありません
                    @endif
                </td>
              </tr>
            </table>
          </a>
      </div>
        <div>
          <a href="{{ route('habit.edit', $habit->id) }}"><i class="fas fa-edit fa-2x fa-fw"></i></a>
        </div>
        <div>
          {!! Form::open(['route' => ['habit.destroy', $habit->id], 'method' => 'DELETE'])!!}
            {!! Form::button('<i class="fas fa-trash-alt fa-2x fa-fw"></i>', ['type' => 'submit'])!!}
          {!! Form::close()!!}
        </div>
      </div>
    @endforeach
  </div>
  <div class="pager">
    {{ $habits->appends(request()->all())->links() }}
  </div>
</div>

@endsection
