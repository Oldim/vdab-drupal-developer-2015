<?php 

	$fruit	=	'ananas';
	$needle	=	'a';

	$positieKarakter	=	strrpos( $fruit, $needle );

	$fruitHoofdletters	=	strtoupper( $fruit );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing string extra functions - Deel 2</title>
    </head>
    <body>

		<h1>Oplossing string extra functions - Deel 2</h1>
		
		<p>De laatste positie van het karakter "<?= $needle ?>" in het woord "<?= $fruit ?>" bedraagt <?= $positieKarakter ?> </p>

		<p>Het fruit in hoofdletters: "<?= $fruitHoofdletters ?>"</p>

    </body>
</html>