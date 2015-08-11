<?php 

	$jaartal			=	2000;
	$isSchrikkeljaar 	= 	false;

	if ( $jaartal % 4 === 0 && ( $jaartal % 100 !== 0 || $jaartal % 400 === 0 ) )
	{
		$isSchrikkeljaar 	= 	true;
	}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing conditional statement if else- Deel 1</title>
    </head>
    <body>

		<h1>Oplossing conditional statement if else- Deel 1</h1>

		<p>Het jaartal "<?= $jaartal ?>" is <?= ( $isSchrikkeljaar ) ? '' : 'g' ?>een schrikkeljaar</p>

    </body>
</html>