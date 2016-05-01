<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Błędy w PHP</title>
	<link rel="stylesheet" href="semantic.min.css">
	<link rel="stylesheet" href="custom.css">
</head>
<body>
	<div class="ui container content">
		<div class="top">
		<h2>Wyjątki w PHP</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis libero, labore reprehenderit vel nesciunt cum atque repellat repudiandae impedit sapiente minima rem eveniet, quasi quis expedita at excepturi! Iste, nam.</p>

		<?php
		
                function calculateArea($a,$b)
                {
                    if($a <= 0 || $b<=0)
                    {
                        /*Wyrzucamy wyjatek - nie chcemy wartosci 0*/                         
                        throw new Exception('Wartość musi być większa niż zero');
                    }
                    return $a * $b;
                }
                
                /*Obsługa wyjątku*/
                try
                {
                echo calculateArea(10, 0);
                }  catch(Exception $e) {
                    /*Przechwytujemy wyjątek*/
                    echo $e->getMessage();
                    
                }
                
                function  addNumbers(int $a,int $b)
                {
                    return $a+$b;
                }
                try{
                echo addNumbers('kurs', 10);
                }/*Wyłapanie wyjatku wbudowanego- Nowość w PHP7*/  
                catch (Throwable $e){
                    echo $e->getMessage();
                    
                }
                ?>

	</div>
</body>
</html>