<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(file_exists('test.txt'))
{
    $Plik = fopen('test.txt', 'r');
    $line = fgets($Plik);
   // echo $line.'<br/>';
    
   // $lines = fread($Plik);
    
  //  echo $lines.'<br/>';
    
    for($i=0;$i<5;$i++)
    {   
        $lines = fgets($Plik);
        echo $lines.'<br/>';
    }
    
    fclose($Plik);
    
    copy('test.txt','test2.txt');
    copy('test.txt','Nowe\test2.txt');
    unlink('test2.txt');
    
}  else {
$Plik=  fopen('test.txt', 'w+');
$tekst=<<<_TEKST
        Pierwsza linia
        Druga linia
        trzecia linia
        czwarta linia
        piata linia
_TEKST;
$Plik = fwrite($Plik, $tekst);
fclose($Plik);
}