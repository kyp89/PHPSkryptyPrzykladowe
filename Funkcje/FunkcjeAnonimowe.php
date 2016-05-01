<?php
$numbers = [10,20,30,40,50];

print_r($numbers);
echo '<br/>';
/*Funkcje anonimowe nie zawierają nazwy - przeważnie wywołuje się je tylko raz.*/
/*Mapowanie tablicy - pierwszy parametr to callback - fukncja wywoływana dla każdego 
 * elementu tablicy zrodlowej*/
$newNumbers = array_map(function ($x){return $x*2;},$numbers);
print_r($newNumbers);