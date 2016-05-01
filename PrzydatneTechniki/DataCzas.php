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
                 /*Wyświetlanie daty*/
                 echo date("Y-m-d");
                 echo '<br/>';
                 /*Duża litera przy dniu - dzień tygodnia skrócona nazwa dnia tygodnia*/
                 /*mała litera przy dniu - zwraca dzień miesiąca*/
                 echo date("d-m-y");
                 echo '<br/>';
                 /*Dzień tygodnia - wartość liczbowa*/
                 echo date("w");
                 echo '<br/>';
                 /*Czas w formacie unixowym*/
                 //echo time();
                 /*Klasa dataTime(()*/
                 $date = new DateTime();
                 /*Ustawienie daty*/
                 $date->setDate(2016,01,01);
                 /*Ustawienie czasu*/
                 $date->setTime(10, 20, 0);
                 /*Dodanie czasu do daty - H(godziny), i(minuty), s(sekundy)*/
                 echo $date->format("d-m-y H:i:s");
                 echo '<br/>';
                 /*Alternatywny sposób deklarowania czasu*/
                 $date = new DateTime('2013-01-01');
                 echo $date->format("d-m-y H:i:s");
                // print_r($date);
		?>
		</div>
	</div>
</body>
</html>