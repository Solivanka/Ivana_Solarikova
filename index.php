<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $surname = $email = $gender = $age = $hometown = "";
?>

<h2>Webový formulár</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <br><br>
  Surname: <input type="text" name="surname" value="<?php echo $surname;?>">
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <br><br>
  Gender: <input type="text" name="gender" value="<?php echo $website;?>">
  <br><br>
  Age: <input type="text" name="age" value="<?php echo $name;?>">
  <br><br>
  Hometown: <input type="text" name="hometown" value="<?php echo $surname;?>">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>

<?php
$myfile = fopen("data.txt", "w") or die("Unable to open file");
$name = "Ivana";
fwrite($myfile, $name);

$email = "solivanka";
fwrite($myfile, $email);
fclose($myfile);
?>