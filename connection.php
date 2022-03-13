<?php
    $user = 'root';
    $password = ''; 
    $database = 'tradewithmak'; 
    $servername='localhost';
    $mysqli = new mysqli($servername, $user, $password, $database) or die("Unable to connect");
    
    // Checking for connections
    if ($mysqli->connect_error) {
        die('Connect Error (' . 
        $mysqli->connect_errno . ') '. 
        $mysqli->connect_error);
    }
    
    // SQL query to select data from database
    $sql = "SELECT * FROM userdashboard";
    $result = $mysqli->query($sql);
    $mysqli->close(); 
?>