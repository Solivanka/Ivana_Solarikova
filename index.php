<html>
<head>
    <title>Counter and Refresh Button</title>
</head>
<body>
    <?php
    session_start();

    if(isset($_SESSION['count'])) {
        $_SESSION['count']++;
    } else {
        $_SESSION['count'] = 1;
    }

    echo "<h1>Counter: ".$_SESSION['count']."</h1>";
    ?>

    <form action="" method="post">
        <input type="submit" name="counter" value="Counter">
        <input type="submit" name="refresh" value="Refresh">
    </form>

    <?php
    if(isset($_POST['counter'])) {
        $_SESSION['count']++;
    }

    if(isset($_POST['refresh'])) {
        $_SESSION['count'] = 0;
    }
    ?>
</body>
</html>