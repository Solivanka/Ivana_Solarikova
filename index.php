<html>
<body>

<form action="index.php" method="post">
Name: <input type="text" name="name"><br>
Surname: <input type="text" name="surname"><br>
Age: <input type="text" name="age"><br>
Hometown: <input type="text" name="hometown"><br>
School: <input type="text" name="school"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>

<?php
              
if(isset($_POST['name']))
{
$data=$_POST['name'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>