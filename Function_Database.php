<?php

require_once("./Database.php");
function selectAllCocktail()
{
    $conn = db();

    $query = $conn->prepare("SELECT * FROM Cocktails");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    
}
function selectSpecificMessage($numEmetteur, $numRecepteur)
{
    $conn = db();

    $query = $conn->prepare("SELECT * FROM Messages WHERE NumEmetteur = ? AND NumRecepteur = ? OR NumRecepteur = ? AND NumEmetteur = ?");
   // $query->bindParam('cocktail',$cocktail,PDO::PARAM_STR);
    $query->execute([$num,$num]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    
}



?>