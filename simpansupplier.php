<?php
    include "database.php";
    $nama_supplier=mysqli_real_escape_string($conn,$_POST["nama_supplier"]);
    $alamat=mysqli_real_escape_string($conn,$_POST["alamat"]);
    $no_telp=mysqli_real_escape_string($conn,$_POST["no_telp"]);


$q = "INSERT INTO supplier (nama_supplier, alamat, no_telp) VALUES ('$nama_supplier', '$alamat', '$no_telp')";
mysqli_query($conn, $q);

    
    //$q="SELECT * FROM user WHERE username='$username' AND password='$password'";
    //$res=mysqli_query($conn,$q);
    header("location:tampilanadmin.php");
?>