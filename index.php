<?php
/* --- Paths --- */

$paths = array(
	'app' => __DIR__ . '/app',
	'base' => '/authoring',
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

/* --- Display the view --- */
// We're in our root directory.
if ($uri == '/')
{
	// Display the home page.
	echo $blade->view()->make("pages/home", ['paths' => $paths]);
}
else
{
	// Try and make the view.
	try
	{
		// Display it if we make it!
		echo $blade->view()->make("pages$uri", ['paths' => $paths]);
	}
	catch (Exception $e)
	{
		// Otherwise we failed to make it, so let's "404."
		echo $blade->view()->make("pages/404", ['paths' => $paths]);
	}
}