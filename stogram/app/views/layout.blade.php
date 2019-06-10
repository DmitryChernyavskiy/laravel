<html>
<head>
<title>StoGram</title>
</head>
<body>
<div id="header">
@if(Auth::check())
<p>Hello, {{Auth::user()->name}} <a href="{{action('AuthController@logout')}}">Log Out</a></p>
@else
<p><a href="{{action('AuthController@showLoginForm')}}">Log in</a> or <a href="{{action('AuthController@showSignupForm')}}">Sign Up</a></p>
@endif
</div>
<div id="content">
@yield('content')
</div>
</body>
</html>
