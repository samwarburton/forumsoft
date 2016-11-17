@extends('app.layout')

@section('content')


<div class="container">
@foreach($boards as $board)

<div class="row">
<h4><a href="/board/{{$board->id}}">{{$board->name}}</a></h4>

</div>
@endforeach

</div>


@endsection