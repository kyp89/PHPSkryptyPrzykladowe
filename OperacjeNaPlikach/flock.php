<?php
/*Sprawdzenie czy plik istnieje*/
if(file_exists("JakisPlik.txt"))
{
    /*Jeśli tak otwórz go*/
$Plik = fopen("JakisPlik.txt", 'r+');
}else
{
    /*Jeśli nie utwórz plik*/
$Plik = fopen('JakisPlik.txt', 'w+');
    echo 'Plik nie istnieje - zostanie utworzony'.'<br/>';
}
/*Blokowanie pliku przed otwarciem przez inny proces*/
if(flock($Plik, LOCK_EX))
{
    $text = 'Kolejna linijka tesktu';
    /*Przejście na koniec pliku*/
    fseek($Plik,0,SEEK_END);
    /*Zapisuje nową zawartość pliku*/
    fwrite($Plik, $text);

     /*Zwolnienie zasobu*/
    flock($Plik, LOCK_UN);
    /*Zamknięcie pliku*/
    fclose($Plik);
    
    
    /*Pobiera zawartość pliku*/
    $ZawartoscPliku = file_get_contents('JakisPlik.txt');
    /*Wyświetla zawartość pliku*/
    echo $ZawartoscPliku;

}
        


