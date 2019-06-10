@extends('layout')

@section('content')
<div class="image">
<img src="{{action('HomeController@getImageFile', $image->id)}}" title="{{$image->name}}"/>
<p>{{$image->description}}</p>
</div>
@if($image->comments)
@foreach($image->comments as $comment)
<div class="comment">
	<div class="comment-head">
		{{$comment->user->name}} <span>{{$comment->created_at}}</span>
	</div>
	<div class="comment-body">
		{{$comment->text}}
	</div>
</div>
@endforeach
@endif

<form action="{{action('HomeController@postComment')}}" method="POST">
<input type="hidden" name="image_id" value="{{$image->id}}"/>
<textarea name="text">
</textarea>
<button type="submit">Add Comment</button>
</form>

@stop
