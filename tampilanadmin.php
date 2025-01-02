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

    <style>
        tr td {
            border:solid 1px #FFFFFF
        }
    </style>
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
    <main class="header">
        <h1>Welcome Admin!</h1>
      </main> 
      </section> 
      
      <main class="content">
            <a style="margin-left: 40px; color:white; font-size:20px" href="tambahmenu.php">Add</a>
            <table border="1">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Stock</td>
                        <td>Expired Date</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $q="SELECT * FROM menu";
                        $res=mysqli_query($conn,$q);
                        while ($row=mysqli_fetch_assoc($res))
                        {
                            ?>  
                            <tr>
                                <td><?php echo $row["nama"];?></td>
                                <td><?php echo $row["harga"];?></td>
                                <td><?php echo $row["Stock"];?></td>
                                <td><?php echo $row["Expired_Date"];?></td>
                                <td>
                                    <a href="updatemenu.php?id=<?php echo $row["id"];?>">Update</a>
                                    <a href="deletemenu.php?id=<?php echo $row["id"];?>">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
            <br/><br/>
            
      </main>
    </section>

    <section>
    <main class="content">
    <a style="margin-left: 40px; color:white; font-size:20px" href="tambahsupplier.php">Add</a>
    <table border="1">
    <thead>
        <tr>
            <td>Supplier Name</td>
            <td>Alamat</td>
            <td>No Telp</td>
        </tr>
    </thead>
    <tbody>
        <?php
            $q = "SELECT * FROM supplier";  // Ganti dengan query yang sesuai
            $res = mysqli_query($conn, $q);
            while ($row = mysqli_fetch_assoc($res)) {
        ?>
            <tr>
                <td><?php echo $row["nama_supplier"]; ?></td>
                <td><?php echo $row["alamat"]; ?></td>
                <td><?php echo $row["no_telp"]; ?></td>
                <td>
                    <a href="updatesupplier.php?id=<?php echo $row['id']; ?>">Update</a> 
                    <a href="deletesupplier.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>
    <br/><br/>
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
