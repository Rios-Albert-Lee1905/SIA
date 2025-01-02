<?php
include "database.php";

$nama = mysqli_real_escape_string($conn, $_POST["nama"]);
$harga = mysqli_real_escape_string($conn, $_POST["harga"]);
$stock = mysqli_real_escape_string($conn, $_POST["Stock"]);
$id = mysqli_real_escape_string($conn, $_POST["id"]);
$expired_date = mysqli_real_escape_string($conn, $_POST["Expired_Date"]);

// Pastikan kolom Expired_Date ada
$q = "UPDATE menu SET nama='$nama', harga='$harga', Stock='$stock', Expired_Date='$expired_date' WHERE id='$id'";

if (mysqli_query($conn, $q)) {
    header("location:tampilanadmin.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>