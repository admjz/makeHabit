@extends('layouts/app')
@section('content')

<div>習慣にしたいことを登録しましょう</div>
<form method="POST" action="{{ route('habit.store') }}">
  @csrf
  <div>
    <input name="title" type="text" placeholder="習慣にしたいことを入力してください">
    <span></span>
  </div>
  <div>
    <button type="submit">追加</button>
  </div>
</form>

@endsection
