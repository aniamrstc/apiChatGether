<?php

require_once("./Database.php");
function selectAllMessage()
{
    $conn = db();

    $query = $conn->prepare("SELECT * FROM Messages");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function selectSpecificMessage($numEmetteur, $numRecepteur)
{
    $conn = db();

    $query = $conn->prepare("SELECT * FROM Messages WHERE NumEmetteur = ? AND NumRecepteur = ? OR NumRecepteur = ? AND NumEmetteur = ?");
    // $query->bindParam('cocktail',$cocktail,PDO::PARAM_STR);
    $query->execute([$numEmetteur, $numRecepteur,$numEmetteur, $numRecepteur]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function InsertUser($numUser)
{

    $conn = db();
    $query = $conn->prepare("INSERT INTO Users (idNum) value(?)");
    $query->execute([$numUser]);
}

function InsertMessage($numEmetteur, $numRecepteur, $Message)
{
    $conn = db();
    $query = $conn->prepare("INSERT INTO Messages (NumEmetteur,NumRecepteur,Message) value(?,?,?)");
    $query->execute([$numEmetteur, $numRecepteur, $Message]);
}

// function GetNumberOfMessageForAUser($numUser)
// {
//     $conn = db();
//     $query = $conn->prepare("SELECT COUNT(Num) FROM Messages,Users WHERE Messages.numUser=Users.Num AND Users.Num=? ");
//     $query->execute([$numUser]);
//     return $query->fetch(PDO::FETCH_NUM)[0];
// }
