<?php
/*Pliki cookie tworzymy na samym początku dokumentu - przed załadowanie pliku*/
/*podajemy identyfikator, wartość identyfikatora, oraz czas ważności pliku*/
setcookie('userid',34567,time()+3600);
?>

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
                echo $_COOKIE['userid'];
                /*Modyfikacja coockie*/
		//setcookie('userid',909090);
                /*odczytanie coockie*/
               // echo $_COOKIE['userid'];
                /*usówanie cookie*/
              // unset($_COOKIE['userid']);
                //echo $_COOKIE['userid'];
		?>
		</div>
	</div>
</body>
</html>

