<?php

class User
{
    /*Warto używać protected dla własciwości które chcemy poddać dziedziczeniu*/
    /*Ale można podglądać zawartość tych zmiennych jeśli obiekt zostanie wyświetlony z print_r()*/
    /*private powoduje blokadę dziedziczenia tych właściwości*/
    
    private $ImieINazwisko;
    protected $Email;
    protected $Password;
    
    static $NazwaKlasy = 'To jest jakaś nazwa klasy';
    
    /*Tworzenie konstruktora klasy*/
    function __construct($imieNazwisko,$emial,$password) {
        $this->ImieINazwisko=$imieNazwisko;
        $this->Email=$emial;
        $this->Password=$password;
    }
    
    
}
/*Dziedziczenie*/
class User2 extends User
{
    
}

/*Tworzenie instacji użytkownika*/
$Uzytkownik = new User('Jan Kowalski','jankowalski@o2.pl','1234');


/*Odwołanie do statycznej */
echo User::$NazwaKlasy;
echo '<br/>';
print_r($Uzytkownik);
