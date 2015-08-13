<?php 

	$dieren	=	array( "Quetzal", "Kakatoe", "Kat", "Bijeneter", "Mier" );

	$aantalDieren	=	count( $dieren );

	$teZoekenDier	=	"Kat";

	$dierGevonden	=	array_search( $teZoekenDier, $dieren );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing arrays functions - deel 1</title>
    </head>
    <body>

		<h1>Oplossing arrays functions - deel 1</h1>

		<h2>Dieren afdrukken naar het scherm</h2>

		<ul>	
			<?php 
				for ($dierKey = 0; $dierKey < $aantalDieren; ++$dierKey) 
				{ 
					echo '<li>' . $dieren[ $dierKey ] . '</li>';
				}
			?>
		</ul>

		<h2>Te zoeken dier "<?= $teZoekenDier ?>"</h2>

		<p>Het dier is <?= ( $dierGevonden ) ? '' : 'niet' ?> teruggevonden</p>

    </body>
</html>