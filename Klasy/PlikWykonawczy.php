<?php
include_once 'klasyIOBiekty.php';

$Trening = [array('NazwaCwiczenia'=>(string)'','czas'=>(int)0,'opis'=>(string)'','urlObrazka'=>(string)'')];

for((int)$i=0;$i<10;$i++)
{
$Trening[$i]['NazwaCwiczenia']='Pompki'.$i;
$Trening[$i]['czas']='60';
$Trening[$i]['opis']='jakis opis'.$i;
$Trening[$i]['urlObrazka']='Jakis Url'.$i;
}

$uzytkownik = new User();
$uzytkownik->set_trening($Trening);

print_r($Trening);
