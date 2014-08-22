<?php
/* --- Session and Output Buffer --- */

ob_start();
session_start();

/* --- Paths --- */

$paths = array(
	'app' => __DIR__ . '/app',
	'base' => '/',
	'cache' => __DIR__ . '/app/cache',
	'views' => __DIR__ . '/app/views',
	'url' => "//colbydude.com"
);

/* --- Setup Illuminate --- */
require 'vendor/autoload.php';

/* --- Setup Blade Templating --- */
use Philo\Blade\Blade;

$blade = new Blade($paths['views'], $paths['cache']);

/* --- Get the correct view --- */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = str_replace("authoring/", "", urldecode($uri));

// This allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test the
// application without having installed a "real" web server software here.
if ($uri !== '/' and file_exists($requested))
{
	// We're requesting a file or directory that exists, so let's go to that instead.
	return false;
}

/* --- Page Style (Dark/Light) --- */
// Get style from the session, if it's set.
if (isset($_SESSION["STYLE"]))
{
	$style = $_SESSION["STYLE"];
}
else
{
	// Otherwise pick a random style.
	$rand = rand(0, 1);
	if ($rand == 0)
	{
		$style = "dark";
		$_SESSION["STYLE"] = $style;
	}
	else
	{
		$style = "light";
		$_SESSION["STYLE"] = $style;
	}
}

/* --- Display the view --- */
// We're in our root directory.
if ($uri == '/')
{
	// Display the home page.
	echo $blade->view()->make("pages/home", ['paths' => $paths, 'style' => $style]);
}
else
{
	// Try and make the view.
	try
	{
		// Redirect if uri is /payment
		if ($uri == "/payment")
		{
			header("Location: http://goo.gl/zCfbmn");
		}
		// Display it if we make it!
		echo $blade->view()->make("pages$uri", ['paths' => $paths, 'style' => $style]);
	}
	catch (Exception $e)
	{
		// Otherwise we failed to make it, so let's "404."
		echo $blade->view()->make("pages/404", ['paths' => $paths, 'style' => $style]);
	}
}