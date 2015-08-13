<?php 

	$getallen 	=	array( 8, 7, 8, 7, 3, 2, 1, 2, 4 );

	$uniekeGetallenArray	=	array_unique( $getallen );

	$gesorteerdeGetallen 	=	$uniekeGetallenArray; // Omdat rsort pass by reference is en we de originele array willen behouden
	rsort( $gesorteerdeGetallen );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing arrays functions - deel 3</title>
    </head>
    <body>

		<h1>Oplossing arrays functions - deel 3</h1>

		<h2>Unieke getallen</h2>
		
		<ul>	
			<?php foreach ($uniekeGetallenArray as $getal): ?>
				<li><?= $getal ?></li>
			<?php endforeach ?>
		</ul>

		<h2>Unieke gesorteerde getallen van groot naar klein</h2>
		
		<ul>	
			<?php foreach ($gesorteerdeGetallen as $getal): ?>
				<li><?= $getal ?></li>
			<?php endforeach ?>
		</ul>

    </body>
</html>