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
		//$values = [34,4,45,12,55,29,40,21,9,16,23,18];
		$values = ['foxtrot','bravo','tango','lima','x-ray','hotel','alpha'];
                
                /*Sortowanie tablic przy użyciu operatora porównywania*/
		usort($values, function ($a,$b){
                       return $a<=>$b; 
                    });
                foreach ($values as $value) {
                    /*Sortowanie zdefiniowane przez użytkownika*/
                    
                    
			echo "$value<br>";
		}
		?>
		</div>
	</div>
</body>
</html>

