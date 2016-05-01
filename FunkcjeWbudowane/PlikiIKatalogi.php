<?php

   /*Utworzenie katalogu*/
/*if(!file_exists('KatalogZPlikami'))
{
 
    mkdir("d:/XAMPP/htdocs/PhpProject1/FunkcjeWbudowane/KatalogZPlikami");
    echo 'Utworzono';
}else
{
    echo 'Katalog itnsiejs';
    
}*/
/*Tworzy zmienna która reprezentuje plik*/
/* fopen() otwiera plik jeśli istnieje, jeśli nie to jest on utworzony*/
/*fopen() - pierwszy parametr to nazwa pliku, drugi to tryb 'w' - znaczy zapis(od write)*/
/*
r	Open a file for read only. File pointer starts at the beginning of the file
w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	Creates a new file for write only. Returns FALSE and an error if file already exists
r+	Open a file for read/write. File pointer starts at the beginning of the file
w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
 * 
 * 
 */
$file = fopen('tekst.txt','w');
$text = 'To jest zawartosć pliku';
/*Zapisujemy do pliku*/
fwrite($file,$text);
fclose($file);

/*odczytanie pliku*/
echo readfile('tekst.txt');
