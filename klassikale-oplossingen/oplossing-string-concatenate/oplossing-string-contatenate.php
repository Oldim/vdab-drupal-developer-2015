<?php 

	$naam		=	'Van De Gaar';
	$voornaam	=	'Koen';

	$volledigeNaam	=	$naam . ' ' . $voornaam;

	/*
		1. spaties tellen
		2. karakters berekenen
		3. spaties van karakters aftrekken
	*/

	$naamZonderSpaties = str_replace( ' ', '', $volledigeNaam );

	$aantalKarakters	=	strlen( $naamZonderSpaties );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing string concatenate</title>
    </head>
    <body>

		<h1>Oplossing string concatenate</h1>

		<p><?= $volledigeNaam ?></p>

		<p>De naam "<?= $volledigeNaam ?>" bevat <?= $aantalKarakters ?> karakters. (zonder spaties, op aanvraag van Wim!)</p>

    </body>
</html>