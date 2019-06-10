@extends('layout')

@section('content')
<form method="POST" action="submit">
<input type="text" name="name"/>
<button type="submit">Send</button>
</form>
@stop

