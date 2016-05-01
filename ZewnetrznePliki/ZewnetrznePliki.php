<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zewnętrzne pliki</title>
	<link rel="stylesheet" href="semantic.min.css">
	<link rel="stylesheet" href="custom.css">
</head>
<body>
	<div class="ui container content">
		<div class="top">
			<h2>Zewnętrzne pliki PHP</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam provident optio nemo.</p>			
		</div>
                <?php 
                /*Dołączanie pliku*/
                //
                /*include('form.php'); -> alternatywna forma*/
                //include 'form.php';
                /*require('plik.php');->Wymaga plik do wykonania skryptu*/
                //require 'form.php';
                
                /*Funkcje z zewnętrznych plków*/
                include 'functions.php';
                $head = 'Formularz kontaktowy';
                makeHeader($head);

                require 'form.php';
                ?>
		<footer>
			<h4>Zawartość stopki</h4>
			<p>Lorem ipsum dolor sit.</p>
		</footer>
	</div>
</body>
</html>

