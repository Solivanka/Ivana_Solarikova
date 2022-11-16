<?php
// define variables and set to empty values
$name = $surname = $email = $gender = $age = $hometown = "";
?>

<h2>Webový formulár</h2>

<form method="post">  
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

<?php
extract($_REQUEST);
$file=fopen("data.txt", "a");
fwrite($file, $name);
fwrite($file, $surname);
fclose($file);
?>