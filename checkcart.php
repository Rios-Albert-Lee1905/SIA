<?php
    include "database.php";
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $q = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $res = mysqli_query($conn, $q);

    if ($row = mysqli_fetch_assoc($res)) {
        $_SESSION["user"] = $row;
    if ($row["level"] == "user") {
        header("location: belanjaan.php");
        exit;
    }
    // Add more conditions for different user levels if necessary
    }else {
    header("location: masuk.php?warning=" . urlencode("Please login first!"));
    exit;
    }
?>