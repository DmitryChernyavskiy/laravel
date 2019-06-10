@extends('layout')

@section('content')
@if($errors)
@foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif
<form method="POST" action="{{action('HomeController@postImage')}}" enctype="multipart/form-data">
<label>Name: <input type="text" name="name"></label>
@if($errors->first('name'))
{{$errors->first('name')}}
@endif
<label>Image: <input type="file" name="image"></label>
@if($errors->first('image'))
{{$errors->first('image')}}
@endif
{{-- test comment --}}
<label>Description: <textarea name="description"></textarea></label>
<button type="submit">Upload</button>
</form>

@stop


