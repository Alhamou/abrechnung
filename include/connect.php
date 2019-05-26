<?php


    $dsn = 'mysql:host=localhost;dbname=abrechnung';
    $user = 'root';
    $pass = '';


    $option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8mb4',
    );
        try {

            $con = new PDO($dsn, $user, $pass, $option);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connecting with Database \"abrechnung\"";
        } catch(PDOException $e) {

            echo 'Failed To Connect' . $e->getMessage();
        }
    
?>