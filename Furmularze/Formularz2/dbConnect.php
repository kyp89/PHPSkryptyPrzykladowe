
<?php
/*Nazwa serwera bazy danyc*/
$dbServer='localhost';
/*Nazwa użytkownika*/
$dbUser = 'root';
/*Hasło*/
$dbPassword='';
/*Nazwa bazy danych*/
$dbName = 'kurs_php7';


/*Połączenie z bazą*/
$mySqli = new mysqli($dbServer,$dbUser,$dbPassword,$dbName);
/*Ustawianie kodowania*/
$mySqli->set_charset("utf8");

