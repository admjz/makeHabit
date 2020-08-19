@extends('layouts/app')
@section('content')

<div>実施した内容を入力してください</div>
{!! Form::open(['route' => ['execution.update', $execution->id], 'method' => 'PUT']) !!}
  <table>
    <tr>
      <th>実施日</th>
      <td>{{ $execution->created_at->format('Y/m/d')}}</td>
    </tr>
    <tr>
      <th>実施内容</th>
      <td>{!! Form::text('contents', $execution->contents) !!}</td>
      <span></span>
    </tr>
    <tr>
      <th></th>
      <td>{!! Form::submit('更新する') !!}</td>
    </tr>
  </table>
{!! Form::close() !!}

@endsection