<?php 

	$lettertje		=	'e';
	$cijfertje		=	'3';
	$langsteWoord	=	'zandzeepsodemineralenwatersteenstralen';

	$vervanging	=	str_replace( $lettertje, $cijfertje, $langsteWoord )

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing string extra functions - Deel 3</title>
    </head>
    <body>

		<h1>Oplossing string extra functions - Deel 3</h1>

		<p>Het woord "<?= $langsteWoord ?>" waarbij "<?= $lettertje ?>" vervangen wordt door "<?= $cijfertje ?>" ziet er zo uit: "<?= $vervanging ?>"</p>
    </body>
</html>