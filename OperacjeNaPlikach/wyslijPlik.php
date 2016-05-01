<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo 'plik'.'<br/>';
if($_FILES)
{
    
    $name = $_FILES['fileName']['name'];
    move_uploaded_file($_FILES['fileName']['tmp_name'], $name);
    print_r($name);
    echo '<img src='.$name.">";
}  else {
    echo 'Nie udało się wysłać pliku'.'<br/>';
}