<?php 


	
	$getal =	rand( 1, 40 );

	/*$antwoord	=	"";

	if ( $getal < 10 )
	{
		$antwoord = "Het getal ligt tussen 0 en 10";
	}
	elseif ( $getal >= 10 && $getal < 20  )
	{
		$antwoord = "Het getal ligt tussen 10 en 20";
	}
	elseif ( $getal >= 20 && $getal < 30  )
	{
		$antwoord = "Het getal ligt tussen 20 en 30";
	}
	elseif ( $getal >= 30 && $getal < 40  )
	{
		$antwoord = "Het getal ligt tussen 30 en 40";
	}
	else
	{
		$antwoord = "Dit getal is niet gekend.";
	}
	*/

	$gedeeldDoor10	=	$getal / 10;

	$onder 	=	floor( $gedeeldDoor10 ) * 10;
	$boven 	=	$onder + 10;

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing conditional statement if elseif else</title>
    </head>
    <body>

		<h1>Oplossing conditional statement if elseif else</h1>

		<p>Tussen welke tientallen ligt het getal "<?= $getal ?>"</p>

		<p>Het getal ligt tussen <?= $onder ?> en <?= $boven ?></p>

    </body>
</html>