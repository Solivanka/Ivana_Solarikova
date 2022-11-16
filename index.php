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
$name = $surname = $email = $gender = $comment = $website = "";
?>

<h2>PHP Form Validation Example</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <br><br>
  Surname: <input type="text" name="surname" value="<?php echo $surname;?>">
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
$myfile = fopen("testfile.txt", "w") or die("Unable to open file");
$name = "Ivana";
fwrite($myfile, $name);

$email = "solivanka";
fwrite($myfile, $email);
fclose($myfile);
?>


</body>
</html>