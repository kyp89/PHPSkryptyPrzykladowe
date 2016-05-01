<?php
/*Tworzymy tablicę i kodujemy jako JSON*/
$jakiesDane = ['Dana 1'=>'cos1','Dana 2'=>'cos2','Dana 3'=>'cos3','Dana 4'=>'cos4'];
$daneJSON = json_encode($jakiesDane);

/*Odpczyt pliku*/
$Plik = fopen('JakisPlik.txt', 'w');
$Zapisz = fwrite($Plik, $daneJSON);
fclose($Plik);

if($Zapisz)
{
    echo 'Zapisano pomyslnie'.'<br/>';
    /*Szybkie odczytanie pliku*/
    echo readfile('JakisPlik.txt');
    
}  else {
    echo 'Niepowodzenie';    
}

