<?php
    include "database.php";
    $nama=mysqli_real_escape_string($conn,$_POST["nama"]);
    $harga=mysqli_real_escape_string($conn,$_POST["harga"]);
    $stock=mysqli_real_escape_string($conn,$_POST["stock"]);
    $expired_date=mysqli_real_escape_string($conn,$_POST["expired_date"]);


    $q="INSERT INTO menu (nama, harga, stock, expired_date ) VALUES ('$nama', '$harga', '$stock', '$expired_date')";
    mysqli_query($conn,$q);
    
    //$q="SELECT * FROM user WHERE username='$username' AND password='$password'";
    //$res=mysqli_query($conn,$q);
    header("location:tampilanadmin.php");
?>