<?php
	// Because Windows renders icon fonts badly.
	if (strpos($_SERVER["HTTP_USER_AGENT"], "Windows") !== false)
		$windows = "windows";
	else
		$windows = "not-windows";
?>
<!doctype html>
<html lang="en">
	<head>
		@include('layouts.partials.head')
	</head>
	<body class="text-center {{ $style." ".$windows }}">
		@include('layouts.partials.style-chooser')

		<div class="offset"></div>
		<div class="container page">
			@yield('content')
		</div>

		@include('layouts.partials.footer', array('class' => ''))

		@include('layouts.partials.scripts')
	</body>
</html>