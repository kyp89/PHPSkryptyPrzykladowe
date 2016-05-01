<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//if(isset($_POST['name'])) $name = c stripslashes ($_POST['name']));
//else $name = 'Nie podano';

/*funkcja z wymuszeniem typu zwracanej wartości - działa tylko w PHP7*/
function secureString($string):string
{
    /*Sprawdza czy wartość jest stringiem*/
    if(is_string($string))
    {
    /*Usówa ukośniki*/
  $string = stripcslashes($string);
  /*usówa znaczniki html*/
  $string = strip_tags($string);
  /*Zabezpiecza ewentualne pozostałości po znacznikach html*/
  $string = htmlentities($string);
  
  /*Zwracana wartość to string*/
  return $string;
    }  else {
    return '';    
    }
    
}

echo secureString($_POST['name']);