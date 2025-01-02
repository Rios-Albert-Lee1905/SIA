<?php
    include "database.php";
    
    // Ambil id dari URL
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    
    // Query pertama untuk tabel menu (gunakan nama kolom yang benar)
    $q1 = "SELECT * FROM menu WHERE id='$id'"; // Sesuaikan dengan nama kolom yang benar
    $res1 = mysqli_query($conn, $q1);
    
    // Cek apakah ada data dari menu
    if ($data = mysqli_fetch_assoc($res1)) {
        // Data ditemukan di tabel menu
        // Anda dapat menampilkan atau memproses data menu di sini
    } else {
        echo "Menu tidak ditemukan.";
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
    <link rel="stylesheet" href="css/menu-style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Cravings<span> Cake Store</span></a>

      <div class="navbar-ekstra">
        <a href="keluar.php" id="keluar">Go Out</a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Landing page start -->
    <section class="landing" id="home">
    <main class="header">
        <h1>Please Update!</h1>
      </main> 
    </section>
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
            <form method="POST" enctype='multipart/form-data' action="simpanmenu2.php">
                <table>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" value="<?php echo $data["nama"];?>" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="text" value="<?php echo $data["harga"];?>" name="harga"></td>
                    </tr>
                    <tr>
                        <td>Stock</td>
                        <td><input type="text" value="<?php echo $data["Stock"];?>" name="Stock"></td>
                    </tr>
                    <tr>
                        <td>Expired Date</td>
                        <td><input type="date" value="<?php echo $data["Expired_Date"];?>" name="Expired_Date"></td>
                        </td>
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
    
    <!-- Landing page end -->

   
    <!-- About section end -->

    <!-- Contact section end -->

    <!-- Tak tambahi javascript dikit ya biar responsive -->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
