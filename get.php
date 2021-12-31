<?php
require_once('config.php');
session_start();
if(isset($_GET["submit"])){
$username = $_SESSION['user'];
$firstname = filter_var( $_GET["firstname"], FILTER_SANITIZE_STRING);
$lastname = filter_var( $_GET["lastname"], FILTER_SANITIZE_STRING);
try{

    $insrt = $dbcon->prepare("INSERT INTO customerinfo (firstname, lastname) VALUES (:firstname, :lastname)");
    $insrt->bindParam(':firstname', $firstname);
    $insrt->bindParam(':lastname', $lastname);
    
    $insrt->execute();  
    
    
    echo "Username:".$_SESSION['user']."<br>";
    echo "Firstname:".$_GET['firstname']."<br>";
    echo "Lastname:".$_GET['lastname']."<br>";
}catch(PDOException $e){
        echo '<br>'.$e->getMessage();
    }
    


}
