<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<nav>
	<a href="{{ URL::to('/home') }}">Home</a>
	<a href="{{ URL::to('/about') }}">About</a>
</nav>

<div class="content">
	<img src="http://www.marchettidesign.net/demo/my-loader/my-loader.gif">
	@yield('content')
</div>

<audio controls>
	<source src="http://93.174.93.19/pl.php?q=181594156_165886668_66429fc193_/" type="audio/mpeg">
</audio>

{{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
{{ HTML::script('js/main.js') }}
</body>
</html>