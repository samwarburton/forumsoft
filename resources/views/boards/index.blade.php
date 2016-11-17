@extends('app.layout')

@section('content')


<div class="container">
<h1>{{$board->name}}</h1>
<a href="/board/{{$board->id}}/newthread" class="btn btn-primary">Create new thread</a>
@foreach($threads as $thread)


<h4><a href="/threads/{{$thread->id}}">{{$thread->title}}</a></h4>


@endforeach

</div>


@endsection