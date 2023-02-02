<!DOCTYPE html>
<html>
<body>
<form method="post">

<button type="submit" name="submit">Send</button>
<input type="reset" value="Reset" class="reset_btn" name="reset">

<?php

$button = 2;
    if(isset($_POST["submit"]))
    {
        $button++;
    }
    if(isset($_POST["reset"]))
    {
        $button = 0;
    }
    echo $button;
?>

</form>
</body>
</html>