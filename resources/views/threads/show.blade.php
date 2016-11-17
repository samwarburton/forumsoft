@extends('app.layout')

@section('content')

<div class="container">
<div class="col-md-12 original">
<div class="col-md-2 profile">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjWg-pU9FCXM6Rs_FbdsKD2DYmODT4NXY4Hal3pxpOenasN-gI" class="img-responsive">
</div>
<div class="col-md-10 message">
<h4>{{$thread->title}}</h4>
<p>{{$thread->body}}</p>
</div>
</div>
</div>

<form action="{{$thread->id}}/comment" method="POST">
<div class="form-group container">
	{{csrf_field()}}
	<h4>Add a comment</h4>
<textarea class="form-control" name="body" rows="5"></textarea>
<br>
<input type="submit" class="btn btn-success">
</div>

</form>


@foreach($thread->comments as $comment)

<div class="container">
<div class="col-md-12 comment">
<div class="col-md-2 profile">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjWg-pU9FCXM6Rs_FbdsKD2DYmODT4NXY4Hal3pxpOenasN-gI" class="img-responsive">
</div>
<div class="col-md-10 message">

<p>{{$comment->body}}</p>
</div>
</div>
</div>


@endforeach





</div>
@endsection