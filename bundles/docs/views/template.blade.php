<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">

<<<<<<< HEAD
	{{ HTML::style(URL::$base.'/laravel/css/style.css') }}
	{{ HTML::script(URL::$base.'/laravel/js/modernizr-2.5.3.min.js') }}
=======
	{{ HTML::style('laravel/css/style.css') }}
	{{ HTML::style('laravel/js/modernizr-2.5.3.min.js') }}
>>>>>>> baa91818e7554af82b465684c2cbe8c8035086c6
</head>
<body onload="prettyPrint()">
	<div class="wrapper">
		<header>
			<h1>Laravel</h1>
			<h2>A Framework For Web Artisans</h2>

			<p class="intro-text">
			</p>
		</header>
		<div role="main" class="main">
			<aside class="sidebar">
				{{ $sidebar }}
			</aside>
			<div class="content">
				@yield('content')
			</div>
		</div>
	</div>
	{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js') }}
<<<<<<< HEAD
	{{ HTML::script(URL::$base.'/laravel/js/prettify.js') }}
	{{ HTML::script(URL::$base.'/laravel/js/scroll.js') }}
</body>
</html>
=======
	{{ HTML::script('laravel/js/prettify.js') }}
	{{ HTML::script('laravel/js/scroll.js') }}
</body>
</html>
>>>>>>> baa91818e7554af82b465684c2cbe8c8035086c6
