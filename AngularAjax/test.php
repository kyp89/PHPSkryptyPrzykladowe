<?php
/*
$tablica = ['Element1', 'Element2', 'Element3','Element4', 'Element5','Element6', 'Element7', 'Element8','Element9', 'Element10',];

if(isset($_GET["id"]))
{
//$dane = $tablica[$_GET["id"]];
    $dane = $_GET["id"];
print_r($dane);
}*/

$odebraneDane = file_get_contents("php://input");
$daneZdekodowane = json_decode($odebraneDane);

echo $daneZdekodowane->data->nazwa;

