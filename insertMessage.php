<?php
require_once("./Function_Database.php");
//echo(json_encode(selectAllMessage()));

$numRecepteur = filter_input(INPUT_GET, 'numRecepteur', FILTER_SANITIZE_STRING);
$numEmetteur = filter_input(INPUT_GET, 'numEmetteur', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_GET, "message", FILTER_SANITIZE_STRING);

InsertMessage($numEmetteur,$numRecepteur,$message);

?>