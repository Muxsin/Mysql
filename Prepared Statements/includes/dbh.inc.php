<?php
    $dbServername = "localhost";
    $dbUsername = "muhsin";
    $dbPassword = "Khonabardush1";
    $dbName = "loginsystem";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    if(!$conn){
        die ('I cannot connect to the datebase because: ' . mysqli_error());
    }
