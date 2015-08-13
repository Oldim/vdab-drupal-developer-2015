<?php

	$tekst =   "<p>Dit is een zin.</p>";

    $tekst2 =   &$tekst;

    $tekst2 =   '<p>Dit zijn twee zinnen. Inderdaad, twee zinnen.</p>';

    echo $tekst;

    echo $tekst2;

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <style>
			.error
			{
				background-color:red;
				color:white;
			}
			.success
			{
				background-color:blue;
				color:white;
			}
        </style>
    </head>
    <body>

   
        
        <script src="js/main.js"></script>
    </body>
</html>