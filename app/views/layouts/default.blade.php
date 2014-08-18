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
		<meta charset="UTF-8">
		<title>Colby Terry | Web Developer | Musician | Game Developer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/icons.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-44205813-1', 'punk-programmer.com');
			ga('send', 'pageview');
		</script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="text-center dark {{ $windows }}">
		<div class="style-chooser">
			<a class="choose-dark" href="#" data-style="style.css"></a>
			<a class="choose-light" href="#" data-style="style-inverse.css"></a>
		</div>

		<div class="offset"></div>
		<div class="container default">
			@yield('content')
		</div>

		@include('layouts.partials.footer')

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script>
        		$(document).ready(function()
        		{
        			// Global tooltips.
        			$(".buttons a").tooltip();

        			var style = "dark";
					// Switch to dark color scheme.
					$(".choose-dark").click(function (e)
					{
						e.preventDefault();
						//$.post("../includes/change-style.php", { "STYLE": "STYLE", "VALUE": "style.css" });
						$("body").removeClass("light");
						$("body").addClass("dark");
						style = "dark";
					});
					// Switch to light color scheme.
					$(".choose-light").click(function (e)
					{
						e.preventDefault();
						//$.post("../includes/change-style.php", { "STYLE": "STYLE", "VALUE": "style-inverse.css" });
						$("body").removeClass("dark");
                   		$("body").addClass("light");
						style = "light";
					});
        		});
		</script>
	</body>
</html>