<?php
/*ścisłe sprawdzanie typu danych*/
declare(strict_types=0);
/*Określa zwracaną wartość funkcji*/
/*Tylko PHP7*/
function sumNumbers($a,$b):int {

return $a+$b;
}

/*Przy ścisłym sprawdzaniu typu, jeśli podamy float to wywołamy błąd*/
echo sumNumbers(1, 2).'<br/>';

/*Wartość i typ zmiennej*/
/*Przy słabym kontrolowaniu typów - funkcja będzie rzutować dane na int*/
/*Źle podane dane nie wywołają błędu*/
echo var_dump(sumNumbers(1.2, 2));