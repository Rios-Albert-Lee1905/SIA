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
            <form method="POST" enctype='multipart/form-data' action="simpansupplier.php" >
                <table>
                    <tr>
                        <td>Supplier Name</td>
                        <td><input type="int" name="nama_supplier"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="varchar" name="alamat"></td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td><input type="int" name="no_telp"></td>
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
