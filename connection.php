<?php
    
    $servername = "localhost";
    $username = "root";
    $password = null;
    $db_name = "location";
    $conn = new mysqli($servername,$username,$password,$db_name);

    if($conn->connect_error)
    {
        die("Connection Failed".$conn->connect_error);
    }
    else
    {
        echo "";
    }
?>