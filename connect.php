<?php 
    $conn = new mysqli("localhost", "root", "", "perfectbuilders");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>