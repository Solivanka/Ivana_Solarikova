<html>

<?php
$name = $surname = $age = $hometown = $school = $email = "";
?>

<h2>PHP Form Validation Example</h2>

<body>

<form action="index.php" method="post">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<br><br>
Surname: <input type="text" name="surname" value="<?php echo $surname;?>">
<br><br>
Age: <input type="text" name="age" value="<?php echo $age;?>">
<br><br>
Hometown: <input type="text" name="hometown" value="<?php echo $hometown;?>">
<br><br>
School: <input type="text" name="school" value="<?php echo $school;?>">
<br><br>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
<br><br>
<input type="submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

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