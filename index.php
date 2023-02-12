<!DOCTYPE html>
<html>
<head>
	<title>Counter and Refresh Button</title>
</head>
<body>
	<h1>Counter: <?php echo isset($_COOKIE['count']) ? $_COOKIE['count'] : 0; ?></h1>
	<form action="" method="post">
		<button type="submit" name="counter">Count</button>
		<button type="submit" name="refresh">Refresh</button>
	</form>
</body>
</html>

<?php
if(isset($_POST['counter'])) {
	if(isset($_COOKIE['count'])) {
		$count = $_COOKIE['count'] + 1;
	} else {
		$count = 1;
	}
	setcookie('count', $count, time() + (86400 * 30), "/");
	header("Location: index.php");
}

if(isset($_POST['refresh'])) {
	setcookie('count', 0, time() - (86400 * 30), "/");
	header("Location: index.php");
}
?>