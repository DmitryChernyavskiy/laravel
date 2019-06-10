@extends('layout')

@section('content')
<ul>
@foreach($tracks as $track)
<li>{{$track->Name}}</li>
@endforeach
</ul>
@stop


