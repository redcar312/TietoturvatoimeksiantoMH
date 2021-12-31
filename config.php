<?php
 try{
    $dbcon = new PDO('mysql:host=localhost;dbname=n0huma00', 'root', '');
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo '<br>'.$e->getMessage();
}
