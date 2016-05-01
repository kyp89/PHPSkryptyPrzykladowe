<?php

$basicPrice = 200;
$discountRate = 0.1;

/*Nie można dodać spacji, nie moze zaczynać się od cyfry
nie może nadpisywać funkcji wbudowanych */
function calculateDisc($price,$discount){
    
    $discountedPrice = $price-($price*$discount);
    
    return $discountedPrice;
    
}

echo calculateDisc($basicPrice, $discountRate).'<br/>';
echo calculateDisc(99, 0.3);