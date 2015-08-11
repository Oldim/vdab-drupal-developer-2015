<?php 

	$getal	=	3;
	$dag	=	'';

	if  ( $getal === 1 )
	{
		$dag 	=	'maandag';
	}
	
	if  ( $getal === 2 )
	{
		$dag 	=	'dinsdag';
	}
	
	if  ( $getal === 3 )
	{
		$dag 	=	'woensdag';
	}
	
	if  ( $getal === 4 )
	{
		$dag 	=	'donderdag';
	}
	
	if  ( $getal === 5 )
	{
		$dag 	=	'vrijdag';
	}
	
	if  ( $getal === 6 )
	{
		$dag 	=	'zaterdag';
	}
	
	if  ( $getal === 7 )
	{
		$dag 	=	'zondag';
	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing conditional statement if - Deel 1</title>
    </head>
    <body>

		<h1>Oplossing conditional statement if - Deel 1</h1>

		<p>Getal: <?= $getal ?></p>

		<p>Vandaag is het <?= $dag ?></p>

    </body>
</html>