<?php
require_once('config.php');
/*Matias Hurtamo*/

if (isset($_POST["submit"])) {
    $username = filter_var($_POST["username"]);
    $password = filter_var($_POST["password"]);

    try {


        $hash_pw = password_hash($password, PASSWORD_DEFAULT);
        $insrt = $dbcon->prepare("INSERT INTO customer (username, password) VALUES (:username, :password)");
        $insrt->bindParam(':username', $username);
        $insrt->bindParam(':password', $hash_pw);
        $insrt->execute();
        header('location: login.php');
    } catch (PDOException $e) {
        echo '<br>' . $e->getMessage();
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
 
    <title>Register</title>

</head>

<body>
    <form action="register.php" method="POST">
        <h1>Register</h1>
        <label>Username:</label>
        <input name="username"><br>
        <label>Password:</label>
        <input name="password"><br>

        <button name="submit">Register</button>
    </form>




</body>

</html>