<?php

    $host = "localhost";
    $database = "b18_22266661_ourstore";
    $username = "b18_22266661";
    $password = "5276462piramida";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    }
    catch(PDOEXCEPTIONS $e){
        echo $e->getMESSAGE();
    }

    function executeQuery($upit){
        global $conn;
        $result = $conn->query($upit)->fetchAll();
        return $result;
    }



?>