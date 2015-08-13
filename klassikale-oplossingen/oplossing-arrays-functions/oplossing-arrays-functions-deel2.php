<?php 

	$dieren	=	array( "Quetzal", "Kakatoe", "Kat", "Bijeneter", "Mier" );

	$aantalDieren	=	count( $dieren );

	sort( $dieren );

	$nieuweDieren	=	array( 'Dolfijn', 'Walvis', 'Guppy' );

	$dierenLijst	=	array_merge( $dieren, $nieuweDieren );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing arrays functions - deel 2</title>
    </head>
    <body>

		<h1>Oplossing arrays functions - deel 2</h1>

		<h2>Dieren afdrukken naar het scherm</h2>

		<ul>	
			<?php 
				for ($dierKey = 0; $dierKey < $aantalDieren; ++$dierKey) 
				{ 
					echo '<li>' . $dieren[ $dierKey ] . '</li>';
				}
			?>
		</ul>

		<h2>Lijst met nieuwe dieren</h2>

		<ul>
			
			<?php foreach ( $dierenLijst as $dier ): ?>
				<li><?= $dier ?></li>
			<?php endforeach ?>

		</ul>


    </body>
</html>