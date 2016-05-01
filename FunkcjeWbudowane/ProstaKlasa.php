<?php

/*Przykład tworzenia klasy*/
/*Nazwa nie może zaczynać się od liczby*/
class User{
  /*Właściwości klasy*/
    public $id;
    public $name;
    public $email;
    public $password;
    /*Konstruktor*/
   /* public function __construct(){
        
    }*/
    
    public function __construct($id,$name,$email,$password){
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
    }
    
    /*Tworzymy metody*/
    public function showUserInfo(){
        /*this - odwołujemy się do konkretnego pbiektu*/
        echo $this->id.'<br/>';
        echo $this->name.'<br/>';
        echo $this->email.'<br/>';
        echo $this->password.'<br/>';
        
    }
    
    public function changePassowrd($NewPassword)
    {
        $this->password=$NewPassword;
    }
}

/*Tworzymy obiekt klasy - wersja bez utworzonego konstruktora*/
//$Jedi = new User();
/*Określamy wartości właściwości*/
/*
$Jedi->id=0;
$Jedi->name='Jedi';
$Jedi->email='Jakis@email.pl';
$Jedi->password = 'Jakies haslo';
 * */
 
/*Nowy obiekt - wersja z kontruktorem*/

$Jedi = new User(0,'Jedi','Jedi@pl','JakiesHaslo');

$Jedi->showUserInfo();

$Jedi->changePassowrd('terefele');

$Jedi->showUserInfo();

/*foreach ($Jedi as $us)
{
    echo $us.'<br/>';
    
}*/


class Admin extends User{
    
    public $privileges;
    
    /*Rozszerzanie konstruktora*/
    public function __construct($id, $name, $email, $password,$privileges) {
        parent::__construct($id, $name, $email, $password);
        $this->privileges=$privileges;
    }

        public function setPrivileges($priviliges)
    {
        
        $this->privileges=$priviliges;
        
    }
    /**/
    public function showUserInfo() {
        /*Słowo kluczowe Parent - pozwala na roszerzenie metody z klasy nadrzędnej*/
        parent::showUserInfo();
        echo $this->privileges.'<br/>';
    }
    
}

$Administrator = new Admin(1,'Admin','admin@op.pl','HasloAdmina','Zmiana ustawien');
//$Administrator->setPrivileges('Zmiana ustawien');
$Administrator->showUserInfo();


