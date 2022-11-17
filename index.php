<html>
<body>

<form action="index.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>

<?php
$myfile = fopen("data.txt", "w") or die("Unable to open file!");
$txt = "ivka\n";
fwrite($myfile, $txt);
$txt = "ivka\n";
fwrite($myfile, $txt);
fclose($myfile);
?>