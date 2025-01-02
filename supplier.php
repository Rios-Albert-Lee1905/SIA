<?php
    include "database.php";
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
    <link rel="stylesheet" href="css/menu-style.css" />  
</head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="index.php" class="navbar-logo">Cravings<span> Cake Store</span></a>

      <div class="navbar-ekstra">
        <a href="index.php" id="home"> <i data-feather="home"></i> </a>
      </div>
    </nav>
    <!-- Navbar start -->

    <!-- Landing page start -->
    <section class="landing" id="home">
      <main class="header">
        <h1>Our Supplier</h1>
        <p>This is <span>Our </span> Supplier!</p>
      </main>
    </section>
    <!-- Landing page end -->

    <!-- Kontent section start -->
    <section id="content" class="content">
    <table border="1">
                <thead>
                    <tr>
                        <td>Supplier Name</td>
                        <td>Alamat</td>
                        <td>No Telp</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $q="SELECT * FROM supplier";
                        $res=mysqli_query($conn,$q);
                        while ($row=mysqli_fetch_assoc($res))
                        {
                            ?>  
                            <tr>
                                <td><?php echo $row["nama_supplier"];?></td>
                                <td><?php echo $row["alamat"];?></td>
                                <td><?php echo $row["no_telp"];?></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>  
    </section>
    <!-- Bestseller section end -->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>