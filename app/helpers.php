<?php 

function viewsPath() {
	return BASE_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR; 
} 

function stylePath($viewName) {
	
	if ($viewName == 'lists.index'){
		$style = 'style/';
	}
	else
	{
		$style = '../../style/';
	}
	return $style;
}