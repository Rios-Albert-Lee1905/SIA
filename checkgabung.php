<?php
    include "database.php";
    $username=mysqli_real_escape_string($conn,$_POST["username"]);
    $password=mysqli_real_escape_string($conn,$_POST["password"]);


    $q="SELECT * FROM user WHERE username='$username'";
    $res=mysqli_query($conn,$q);

    if ($row=mysqli_fetch_assoc($res))
    {
        header("location:gabung.php?warning=".urlencode("Username Has Been Used"));
      
        
    }
    else {
        $q="INSERT INTO user (username,password) VALUES ('$username','$password')";
        mysqli_query($conn,$q);
        header("location:masuk.php?warning=".urlencode("Sign Up Successfully Done"));
    }
?>