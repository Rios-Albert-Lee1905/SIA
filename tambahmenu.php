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
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Cravings <span>Cake Store</span></a>

      <div class="navbar-ekstra">
        <a href="keluar.php">Go Out</a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Landing page start -->
    <section class="landing" id="home">
      <main class="content">
            <?php
                if (isset($_GET["warning"]))
                {
                    if ($_GET["warning"]!="")
                    {
                        ?>
                            <h3>
                                <?php
                                    echo $_GET["warning"];
                                ?>
                            </h3>
                        <?php
                    }

                }
            ?>
            <form method="POST" enctype='multipart/form-data' action="simpanmenu.php" >
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="text" name="harga"></td>
                    </tr>
                    <tr>
                        <td>Stock</td>
                        <td><input type="int" name="stock"></td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td><input type="date" name="expired_date"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button style="padding:5px">Save</button>
                        </td>
                    </tr>
                </table>
            </form>
      </main>
    </section>
    <!-- Landing page end -->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
