<?php
require_once("config.php");
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Welcome</title>

</head>

<body>
    <form action="get.php" method="GET">
        <?php
        echo "<h1>Welcome " . $_SESSION['user'] . "</h1>";

        ?>
        <div>
            <h2>Add extra info</h2>
        </div>
        <label>Firstname:</label>
        <input name="firstname"><br>
        <label>Lastname:</label>
        <input name="lastname"><br>

        <button name="submit">Submit</button>



    </form>




</body>

</html>