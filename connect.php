<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "crud";

    $connection = new mysqli($host, $username, $password, $db);
    if($connection->connect_error) {
        echo "Failed to connect DB".$connection->connect_error;
    }
?>