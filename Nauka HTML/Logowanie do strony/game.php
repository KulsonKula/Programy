

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>...</title>
	</head>
	<body>
<?php
session_start();

echo "<p> Witaj ". $_SESSION['login']. "!";

?>
	</body>
</html>