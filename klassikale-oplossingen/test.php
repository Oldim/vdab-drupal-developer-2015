<?php

	$messageClass	= "error";

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

    <div class="<?= $messageClass ?>">
		<?= ( $messageClass === 'error' ) ? "Dit liep fout" : "Dit liep goed" ?>
    </div>
        
        <script src="js/main.js"></script>
    </body>
</html>