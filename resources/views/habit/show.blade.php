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
    @foreach($exec_dates as $exec_date)
      <tr>
        <th>実施日</th>
        <td>{{ $exec_date->created_at->format('Y/m/d') }}</td>
      </tr>
      <tr>
        <th>実施内容</th>
        <td>{{ $exec_date->contents }}</td>
      </tr>
    @endforeach
</table>

@endsection
