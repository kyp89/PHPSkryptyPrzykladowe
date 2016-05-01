<?php

$imiona = ['WILLIAM','JOSUA','JADEN'];

function  changeName($imie1,$imie2,$imie3)
{
    return array(ucfirst(strtolower($imie1)),ucfirst(strtolower($imie2)),ucfirst(strtolower($imie3)));
    
}

print_r(changeName($imiona[0], $imiona[1], $imiona[2]));