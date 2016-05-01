<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Przydatne techniki</title>
	<link rel="stylesheet" href="semantic.min.css">
	<link rel="stylesheet" href="custom.css">
</head>
<body>
	<div class="ui container content">
		<div class="top">
		<?php
		$a=20;
                $b=30;
                
                echo $a<=>$b ;
                echo '<br/>';
                /*Porównanie wartości 0 - są sobie równe*/
                /*1 - kiedy po lewej stronie jest większe niż wyrażenie po prawej*/
                /*-1 - kiedy wyrażenie po prawej stronie* jest większe niż wyrażenie po lewej*/
                 $a1 = 'b';
                 $b1 = 'c';
                 /*W przypadku string brane są położenia pierwszych liter w alfabecie*/
                 echo $a1<=>$b1 ;
                 echo '<br/>';
                 /*Tablice*/
                 $a1 = [5,2,20];
                 $b1 = [5,2,3];
                 
                 /*Porównywanie wartości z tablic*/
                 echo $a1<=>$b1 ;
                 echo '<br/>';
                 
                
		?>
		</div>
	</div>
</body>
</html>