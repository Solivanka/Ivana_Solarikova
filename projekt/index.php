<!DOCTYPE html>
<html>
<head>

<h2>Webový formulár</h2>

<form action="index.php" method="post">  
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
  <input type="submit" name="save" value="Save data in text file">
</form>

</body>
</html>

<?php
              
if(isset($_POST['surname']))
{
$data=$_POST['surname'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>