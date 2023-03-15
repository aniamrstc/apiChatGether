<?php

require_once("./Function_Database.php");
header('Access-Control-Allow-Origin: *');
$numRecepteur = filter_input(INPUT_GET, 'numRecepteur', FILTER_SANITIZE_STRING);
$numEmetteur = filter_input(INPUT_GET, 'numEmetteur', FILTER_SANITIZE_STRING);
if($numRecepteur != null)
{
	echo(json_encode(selectSpecificMessage($numEmetteur,$numRecepteur)));
}
//echo(json_encode(selectAllMessage()));



?>