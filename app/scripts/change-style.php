<?php
	// Launched from POST of clicking a style chooser icon.
	session_start();
	$_SESSION[$_POST["STYLE"]] = $_POST["VALUE"];
?>