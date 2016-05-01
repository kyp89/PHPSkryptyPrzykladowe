<?php
/*ścisłe deklarowanie typów - 1 wymusza mocno, 0 słabo*/
/*Musi być na początku pliku*/
declare(strict_types=1);

/*Typowanie - określanie typów danych*/
/*Podając int  - określamy jaki parametr ma być wywołany*/
function sumNumbers(int $a,int $b)
{    
    return $a + $b;   
}

$x = sumNumbers(5, 5);

echo $x.'<br/>';
/*typuje stringa*/
function  displayTitle(String $title)
{
    return $title;
}

echo displayTitle('PHP').'<br/>';
