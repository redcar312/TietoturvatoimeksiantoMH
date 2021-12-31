<?php
require_once('config.php');

if (isset($_POST["submit"])) {
    session_start();
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    try {
        $sql = "SELECT * FROM customer WHERE username=?";
        $prep = $dbcon->prepare($sql);
        $prep->execute(array($username));
        $rows = $prep->fetchAll();
        foreach ($rows as $row) {
            $pw = $row["password"];
            if (password_verify($password, $pw)) {
                $_SESSION['user'] = $username;
                header('location: welcome.php');
            } else {
                echo "Wrong username or password";
            }
        }
    } catch (PDOException $e) {
        echo '<br>' . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>login</title>

</head>

<body>
    <form action="login.php" method="POST">
        <h1>Login</h1>
        <label>Username:</label>
        <input name="username"><br>
        <label>Password:</label>
        <input name="password"><br>

        <button name="submit">Login</button>
    </form>




</body>

</html>