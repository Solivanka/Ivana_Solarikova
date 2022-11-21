<?php
if(isset($_POST['submit'])){
$Name = "Name:".$_POST['name']."
";
$Pass = "Surname:".$_POST['surname']."
";
$file=fopen("data.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);
}
?>

<html>

<?php
$name = $surname = $age = $hometown = $school = $email = "";
?>

<h2>WEB FORM</h2>

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

</body>
</html>

<?php

    extract ($_REQUEST);
    $file = fopen("data.txt", "a");

    fwrite ($file, "name: ");
    fwrite ($file, $name);

    fclose($file);

?>