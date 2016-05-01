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
if(mysqli_connect_errno())
{
    //echo 'Błąd bazy danych';
}else
{
    
   // print_r($mySqli);
}

$sql = "CREATE TABLE student
(
id int not null AUTO_INCREMENT,
imie varchar(30) not null,
nazwisko varchar(30) not null,
urodzenie_data date not null,
email varchar(50) not null,
PRIMARY KEY(id)
)";

if($mySqli->query($sql)===TRUE)
{
    echo "Utworzono Tabele";
}else
{
    
    echo 'Błąd tworzenia tabeli';
}

$mySqli->close();
