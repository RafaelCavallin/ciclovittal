<?php 

function post($key)
{
	return str_replace("'", "", $_POST[$key]);
}
function get($key)
{
	return str_replace("'", "", $_GET[$key]);
}

function formatDate($date)
{

	return date('d/m/Y'." - ".'H:i:s' , strtotime($date));
}

function formatDate2($date)
{

	return date('d/m/Y', strtotime($date));
}

 ?>