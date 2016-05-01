<?php
$price = 69;
$description = 'Jakis tam cos';
$currency = ' zł';


/*Trim() - usówanie pustych znaków*/
//echo $price.trim($currency);
/*Wycinanie słów ze string*/
 /*substr(strin,IndeksPoczątkowy,indeksKońcoy)*/
 //echo substr($description,0,10);
/*explode - rozbija sting na słowa - > zwraca tablicę. Jako podział wykorzystuje znak z pierwzego argumentu*/
 print_r(explode(" ",$description));
 