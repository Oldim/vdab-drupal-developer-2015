<?php 

	$seconden	=	221108521;

	/*Aantal seconden in één: */
	$minuut		=	60;
	$uur		=	60 * $minuut;
	$dag		=	24 * $uur;
	$week		=	7 * $dag;
	$maand		=	31 * $dag;
	$jaar 		=	365 * $dag;

	/* Aantal in getal */
	$aantalMinuten	=	floor( $seconden / $minuut );
	$aantalUren		=	floor( $seconden / $uur );
	$aantalDagen	=	floor( $seconden / $dag );
	$aantalWeken	=	floor( $seconden / $week );
	$aantalMaanden	=	floor( $seconden / $maand );
	$aantalJaren	=	floor( $seconden / $jaar );
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing conditional statement if else- Deel 2</title>
    </head>
    <body>

		<h1>Oplossing conditional statement if else- Deel 2</h1>

		<ul>
			<li>minuten: <?= $aantalMinuten ?></li>
            <li>uren: <?= $aantalUren ?></li>
            <li>dagen: <?= $aantalDagen ?></li>
            <li>weken: <?= $aantalWeken ?></li>
            <li>maanden (31): <?= $aantalMaanden ?></li>
            <li>jaren (365): <?= $aantalJaren ?></li>
		</ul>

    </body>
</html>