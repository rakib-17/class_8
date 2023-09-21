<?php
    $hostName= 'localhost';
    $userName= 'root';
    $password= '';
    $database= 'blog_post';
    $connection= mysqli_connect($hostName, $userName, $password, $database);

    if($connection){
        echo "Database Connected Successfully Done";
    }

?>