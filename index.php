<?php


define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
define('URL', 'http://localhost/files/projects/Limbo/');


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Limbo Search</title>
		
		<script async src="https://cse.google.com/cse.js?cx=010490807161701699636:nramw2bnq9l" type="text/javascript"></script>
	</head>
	<body>
		<form method="get" action="<?= URL; ?>search.php">
			<input type="text" name="query">
			<input type="submit" value="Submit">
		</form>
	</body>
</html>


