<?php 

	$fruit	=	'kokosnoot';
	$needle	=	'o';

	$aantalKarakters	=	strlen( $fruit );

	$positieKarakter	=	strpos( $fruit, $needle );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing string extra functions - Deel 1</title>
    </head>
    <body>

		<h1>Oplossing string extra functions - Deel 1</h1>

		<p>Het fruit "<?= $fruit ?>" bevat <?= $aantalKarakters ?> karakters.</p>

		<p>De positie van het karakter "<?= $needle ?>" in het woord "<?= $fruit ?>" bedraagt <?= $positieKarakter ?> </p>

    </body>
</html>