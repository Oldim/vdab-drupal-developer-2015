<?php 

	$getal	=	rand( 1, 7 );
	
	switch ( $getal )
	{
		case 1 :
			$dag = "maandag";
			break;

		case 2 :
			$dag = "dinsdag";
			break;

		case 3 :
			$dag = "woensdag";
			break;

		case 4 :
			$dag = "donderdag";
			break;

		case 5 :
			$dag = "vrijdag";
			break;

		case 6 :
			$dag = "zaterdag";
			break;

		case 7 :
			$dag = "zondag";
			break;
	}
	


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing conditional statements switch</title>
    </head>
    <body>

		<h1>Oplossing conditional statements switch</h1>

		<p>De dag die bij het getal "<?= $getal ?>" hoort is: <?= $dag ?></p>

    </body>
</html>