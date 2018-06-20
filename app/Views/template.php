<?php

if (isset($viewName)) {

	$path = viewsPath() . $viewName . '.php';

	$style = stylePath($viewName);

	if (file_exists($path)) { 
		require_once viewsPath().'header.php';

		require_once viewsPath().'navbar.php'; 

		require_once $path;

		include_once viewsPath().'footer.php';

	} 
}