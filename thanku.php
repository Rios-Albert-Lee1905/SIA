<?php 
    include "database.php";

    // Check if user is logged in
    if (!isset($_SESSION["user"])) {
    header("location: logindulu.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cravings Cake Store</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="index.php#home" class="navbar-logo">Cravings <span>Cake Store</span>.</a>
      <div class="navbar-nav">
        <a href="tampilanuser.php">Shop Again!</a>
      </div>

      <div class="navbar-ekstra">
        <a href="keluar.php">Go Out</a>
      </div>
    </nav>
    <!-- Navbar end -->

    <section class="landing" id="home">
      <main class="content">
      <h1>Thank You!</h1>
      <h2>Thank You for Shopping at Our Store!</h2>
      <a style="font-size:30px; color:white" href="tampilanuser.php">Shop Again! Click Here!</a>
            

    <!-- Tak tambahi javascript dikit ya biar responsive -->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
