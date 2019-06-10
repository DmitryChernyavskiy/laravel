@extends('layout')

@section('content')
<h1>Login</h1>
<form method="POST">
<label>Email <input type="text" name="email"></label>
<label>Password<input type="password" name="password"></label>
<button type="submit">Login Up</button>
</form>

@stop
