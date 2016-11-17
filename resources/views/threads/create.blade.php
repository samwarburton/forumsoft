@extends('app.layout')

@section('content')
<h1>{{$board_id}}</h1>
<div class="container">
<form method="POST" action="/threads"><div class="form-group">
<input type="text" name="title" class="form-control" placeholder="Thread title">

<input type="hidden" name="board_id" value="{{$board_id}}">
<input type="hidden" name="user_id" value="{{$user_id}}">
{{ csrf_field() }}

</div>
<div class="form-group">
<textarea class="form-control" name="body">Enter your text here</textarea>
</div>
<div class="form-group">
<input type="submit" value="hello" class="btn btn-primary">
</div>

</form>



</div>


@endsection