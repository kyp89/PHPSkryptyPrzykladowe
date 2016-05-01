<?php
include 'dbConnect.php';

$odebraneDane = file_get_contents("php://input");
$daneZdekodowane = json_decode($odebraneDane);

$daneDoWyslania = json_encode($daneZdekodowane);

echo $daneDoWyslania;

$imie = $daneZdekodowane['imie'];
$nazwisko = $daneZdekodowane['nazwisko'];
$email_ = $daneZdekodowane['email'];
$dataU = $daneZdekodowane['data_u'];

$sql="INSERT INTO student (imie,nazwisko,email,urodzenie_data) value(.$imie.,.$nazwisko.,.$email_.,.$dataU.)";

if($mySqli->query($sql)==TRUE)
{
    echo 'Poszło dobrze';
}  else {
    

    echo 'Poszło zle';
}
$mySqli->close();


