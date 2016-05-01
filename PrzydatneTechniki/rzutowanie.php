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
		$a='2';
                $a = '2' + 5+5.55 ;
                /*php automatycznie konwertuje typ*/
                /*rzutowanie- wymuszanie typu*/
                $b = (string)$a;
                var_dump($b);
		?>
		</div>
	</div>
</body>
</html>