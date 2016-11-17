@extends('app.layout')

@section('content')
<h1>Gelllloooo</h1>

<div class="container">
	<h1>Name of Board</h1>
@foreach($threads as $thread)

<div class="row">
<h4><a href="/threads/{{$thread->id}}">{{$thread->title}}</a></h4>

</div>
@endforeach

</div>


@endsection