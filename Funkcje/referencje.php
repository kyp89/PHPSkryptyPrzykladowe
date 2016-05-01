<?php
$x = 10;

function divideNumber($number){
    
    return $number/=2;
}




/*Przekazywanie przez wartość - pracuje na kopii zmiennej*/
echo divideNumber($x).'<br/>';

echo $x.'<br/>';
/*Przekazywanie wartości przez referencje*/
/*Przekazywanie przez referencję - modyfikuje wartość*/
function divideNumberRef(&$number){
    
   $number/=2;
}

echo divideNumberRef($x).'<br/>';

echo $x.'<br/>';