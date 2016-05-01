<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo 'plik'.'<br/>';
if($_FILES)
{
    /*Pobiera nazwę pliku*/
    $name = $_FILES['fileName']['name'];
    
    /*Sprawdza czy typ pliku jest zgodny z jednym z typów*/
    switch($_FILES['fileName']['type'])
    {
        /*Zmienna $ext tworzy końcówkę łańcuch która będzie*/
        /*Narzucała rozszerzenie przechowywanego pliku*/
        case 'image/jpeg': $ext = 'jpg';break;
        case 'image/gif': $ext = 'gif';break;
        case 'image/png': $ext = 'png';break;
        case 'image/tif': $ext = 'tif';break;
        default : $ext = '';break;
    }
    /*Jesli zostało narzucone rozszerzenie*/
    if($ext)
    {   
        /*Zmienna $un przechowuje łańcuch nazwy pliku*/
        $un = "Obrazki\Obraz.".$ext;
        /*Przeniesienie pliku i narzucenie nowej nazwy*/
        /*Jeśli ta operacja nie zostanie wykonana plik zostanie usunięty z zasobów*/        
         move_uploaded_file($_FILES['fileName']['tmp_name'], $un);
         echo 'Zapisano obrazek';
    }
}
    
   