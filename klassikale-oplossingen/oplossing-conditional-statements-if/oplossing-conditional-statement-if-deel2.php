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
	
	$dag 	= strtoupper( $dag );


	$letter		=	'A';
	$vervanging	=	'a';

	$alleLettersBehalveLetter	=	strtoupper( $dag );
	$alleLettersBehalveLetter	=	str_replace( $letter, $vervanging, $alleLettersBehalveLetter );
	
	$laatsteLetter			=	strtoupper( $dag );
	$laatsteLetterPositie	=	strripos( $laatsteLetter, $letter );
	$laatsteLetter			=	substr_replace( $laatsteLetter, $vervanging, $laatsteLetterPositie, 1 );
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing conditional statement if - Deel 2</title>
    </head>
    <body>

		<h1>Oplossing conditional statement if - Deel 2</h1>

		<p>Getal: <?= $getal ?></p>

		<p>Vandaag is het <?= $dag ?></p>


		<p>Alle letters "<?= $letter ?>" in dag "<?= $dag ?>" omgezet naar "<?= $vervanging ?>" ziet er zo uit: "<?= $alleLettersBehalveLetter ?>"</p>
		
		<p>De laatste letter in dag "<?= $laatsteLetter ?>" waarbij de laatste "<?= $vervanging ?>" niet in hoofdletters staat.</p>


    </body>
</html>