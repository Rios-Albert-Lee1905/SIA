<?php
    include "database.php";
    
    // Ambil id dari URL
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    
    // Query pertama untuk tabel supplier (gunakan nama kolom yang benar)
    $q1 = "SELECT * FROM supplier WHERE id='$id'"; // Sesuaikan dengan nama kolom yang benar
    $res1 = mysqli_query($conn, $q1);
    
    // Cek apakah ada data dari supplier
    if ($data = mysqli_fetch_assoc($res1)) {
        // Data ditemukan di tabel supplier
        // Anda dapat menampilkan atau memproses data supplier di sini
    } else {
        echo "Supplier tidak ditemukan.";
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
            <form method="POST" enctype='multipart/form-data' action="simpansupplier2.php">
                <table>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <tr>
                        <td>Supplier Name</td>
                        <td><input type="text" value="<?php echo $data["nama_supplier"];?>" name="nama_supplier"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="varchar" value="<?php echo $data["alamat"];?>" name="alamat"></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td><input type="int" value="<?php echo $data["no_telp"];?>" name="no_telp"></td>
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
