<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        
    </style>
</head>
<body>
<form action="" method="post">
    <label for="name">Num1:</label>
    <input type="text" id="num1" name="num1" value="" placeholder="Číslo 1" required>
    <label for="name">Num2:</label>
    <input type="text" id="num2" name="num2" value="" placeholder="Číslo 2" required>
    <label for="name">Num3:</label>
    <input type="text" id="num3" name="num3" value="" placeholder="Číslo 3" required>
    
    <button type="submit" name="submit">Send</button>
    <input type="reset" value="Reset" class="reset_btn">
</form>
<?php
     echo '<h1>Number</h1>';

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    //$num1 = $_GET["num1"];
    //$num2 = $_GET["num2"];
    //$num3 = $_GET["num3"];

    $file_data = "| $num1 | $num2 | $num3 |".PHP_EOL;
    $file_data .= file_get_contents('data.txt');
    file_put_contents('data.txt', $file_data);

     // čitanie pre obrázok hodnôt
     $file2 = fopen("data.txt","r") or die("Unable to open file!");
     $text2 = fread($file2,filesize("data.txt"));
     $text_line = explode("|",$text2);
 
 
     $num1_txt = (int)$text_line[1];
     $num2_txt = (int)$text_line[2];
     $num3_txt = (int)$text_line[3];

     $text = "num1=" . $num1_txt . " num2=" . $num2_txt . " num3=" . $num3_txt;

     echo $text;
     $number = $num1_txt - $num2_txt - $num3_txt;
     echo "<br>";
     echo "Number 1 - Number 2 - Number 3 = ";
     echo $number;

?>
</body>
</html>