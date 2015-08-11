<?php

	$haystack 		= 	'Zoeken naar een naald in een hooiberg.';
	$needle 		= 	'Z';
	
	$needlePosition	= 	strpos( $haystack, $needle );

	if ( $needlePosition === FALSE )
	{
		echo "Niet gevonden";
	}
	else
	{
		echo "Gevonden";
	}

	$toggleValue 	=	1;

	function toggle( $value )
	{
		return abs( $value - 1 );
	}

	$toggleValue = toggle( $toggleValue );

?>