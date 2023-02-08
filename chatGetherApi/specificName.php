<?php
require_once("./Function_Database.php");

$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);

if($name != null)
{
	echo(json_encode(selectSpecificCocktail($name)))
}




?>