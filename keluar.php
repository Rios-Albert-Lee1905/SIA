<?php
include "db.php";
session_start(); // Mulai sesi

// Hapus semua data sesi
session_unset();
session_destroy();

// Alihkan pengguna ke halaman login atau halaman utama
header("Location: index.php"); // arahkan ke halaman tujuan setelah log out
exit();
?>