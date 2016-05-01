<?php
$products = ['Git','Fundation','Bootstrap','WrodPress','Synfony','Laravel'];

/*Zwraca ilość elementów tablicy*/
//echo count($products);
/*Odwracanie tablicy*/
//print_r(array_reverse($products));
/*Sortowanie*/
sort($products);
foreach($products as $product)
{
       echo $product.'<br/>';
}
