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
</table>

@endsection
