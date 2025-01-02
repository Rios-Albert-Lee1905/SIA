<?php
    session_start();
    header('Access-Control-Allow-Origin: *');
    $conn = mysqli_connect("localhost", "root","");
    $dbprocess  = mysqli_select_db($conn, "tokobahan_kue");
?>