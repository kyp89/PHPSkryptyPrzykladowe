<?php

setcookie('Ciastko1','Nazwa Ciastka',time()+60*60,"/");

if(isset($_COOKIE['Ciastko1']))
{
    echo $_COOKIE['Ciastko1'];
    echo "<a href=cookie2.php>Idz dalej</a>";
}

