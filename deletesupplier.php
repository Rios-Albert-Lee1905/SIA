<?php
    include "database.php";
    $id=mysqli_real_escape_string($conn,$_GET["id"]);
    $q="DELETE FROM supplier WHERE id='$id'";
    mysqli_query($conn,$q);
    header("location:tampilanadmin.php");
?>
