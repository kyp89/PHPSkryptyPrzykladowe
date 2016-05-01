<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$Haslo = 'haslo1234';

echo $Haslo.'<br/>';

echo 'Zalecany: Hash() : '.hash('ripemd128',$Haslo).'<br/>';

echo 'Md5() : '.  md5($Haslo).'<br/>';

echo 'sha1() : '.sha1($Haslo).'<br/>';

/*Hasło zawsze najlepiej posolić używając dodatkowych znaków przed i po haśle*/

$sal1 ='lgh%';

$sal2 = '%!hgl';
/*Hashowanie i solenie hasła*/
echo 'Zalecany: Hash() : '.hash('ripemd128',"$sal1$Haslo$sal2").'<br/>';