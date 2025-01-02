<?php
    include "database.php";
    $id=mysqli_real_escape_string($conn,$_GET["id"]);
    $q="DELETE FROM detail_transaksi WHERE ID='$id'";
    mysqli_query($conn,$q);
    header("location:belanjaan.php");
?>
