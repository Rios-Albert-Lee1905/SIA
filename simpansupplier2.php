<?php
include "database.php";

$nama_supplier = mysqli_real_escape_string($conn, $_POST["nama_supplier"]);
$alamat = mysqli_real_escape_string($conn, $_POST["alamat"]);
$no_telp = mysqli_real_escape_string($conn, $_POST["no_telp"]);
$id = mysqli_real_escape_string($conn, $_POST["id"]);

$q = "UPDATE supplier SET nama_supplier='$nama_supplier', alamat='$alamat', no_telp='$no_telp' WHERE id='$id'";

if (mysqli_query($conn, $q)) {
    header("location:tampilanadmin.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>