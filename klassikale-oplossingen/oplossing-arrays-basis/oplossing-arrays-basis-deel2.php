<?php 

	$getallen 	=	array( 1, 2, 3, 4, 5 );
	$getallen2 	=	array( 5, 4, 3, 2, 1, 8, "test" => 5 );

	$product	=	array_product( $getallen );


	$container	=	array();

	for( $getalKey = 0; $getalKey < count( $getallen ); ++$getalKey )
	{
		$getal 	= 	$getallen[ $getalKey ];

		if ( $getal % 2 === 1 )
		{
			$container[ ] 	=	$getal;
		}
	}

	/* Som van de twee getallen arrays */

	$containerSom	=	array();

	for( $getalKey = 0; $getalKey < count( $getallen ); ++$getalKey )
	{
		$getal1 	= 	$getallen[ $getalKey ];
		$getal2 	= 	$getallen2[ $getalKey ];

		$containerSom[ ] 	=	$getal1 + $getal2;
	}

	/* Voorbeeld van array_map function met callback */
	$sumArrays	=	array_map( 'sum', $getallen, $getallen2 );

	function sum( $getal1, $getal2 )
	{
		//echo '<p>ar1: '.$getal1.', ar2:'.$getal2.'</p>';
		return ( $getal1 + $getal2 );
	}

	var_dump( $sumArrays );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing arrays basis - deel 2</title>
    </head>
    <body>

		<h1>Oplossing arrays basis - deel 2</h1>

		<h2>Getallen array</h2>

		<pre><?php var_dump( $getallen ) ?></pre>

		<p>Product van de getallen in de array: <?= $product ?></p>

		<h2>De oneven getallen uit de getallen-array</h2>

		<?php 

			for ($containerKey =0; $containerKey < count( $container ); ++$containerKey ) 
			{ 
				$getal 	= 	$container[ $containerKey ];
				echo '<p>Het getal ' .  $getal . ' is oneven</p>';
			}
		?>

		<?php foreach ( $container as $getal ): ?>
			<p>Het getal <?= $getal ?> is oneven</p>
		<?php endforeach ?>

		<h2>Som van getallen uit twee arrays</h2>

		<?php foreach ( $containerSom as $key => $getal ): ?>
			<p>De som van getal <?= $getallen[ $key ] ?> en <?= $getallen2[ $key ] ?> is <?= $getal ?></p>
		<?php endforeach ?>

    </body>
</html>