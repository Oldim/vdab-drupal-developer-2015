<?php 

	$dieren1 = array ( 'kat' ,'hond' ,'schaap' , 'slang', 'muis' );
	
	$dieren2[] = 'olifant';
	$dieren2[] = 'giraffe';
	$dieren2[] = 'leeuw';
	$dieren2[] = 'hyena';
	$dieren2[] = 'krokodil';



	$voertuigen[ 'landvoertuigen' ]		=	array( "Royal Enfield", "T-Ford" );
	$voertuigen[ 'watervoertuigen' ]	=	array( "Speedboot", "Vrachtschip" );
	$voertuigen[ 'luchtvoertuigen' ]	=	array( "G6 Gulfstream", "B52" );
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing arrays basis - deel 1</title>
    </head>
    <body>

		<h1>Oplossing arrays basis - deel 1</h1>

		<h2>Dieren</h2>

		<pre><?php var_dump( $dieren1 ) ?></pre>
		<pre><?php var_dump( $dieren2 ) ?></pre>

		<h3>Voertuigen</h3>

		<pre><?php var_dump( $voertuigen ) ?></pre>

    </body>
</html>