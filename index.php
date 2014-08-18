<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require 'vendor/autoload.php';

use Philo\Blade\Blade;

$views = __DIR__ . '/app/views';
$cache = __DIR__ . '/app/cache';

$blade = new Blade($views, $cache);

if (isset($_GET['action']))
	$action = $_GET['action'];
else
	$action = 'home';

//echo "pages/$action";
echo $blade->view()->make("pages/$action");