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
    <link rel="stylesheet" href="css/menu-style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="index.php#home" class="navbar-logo">Cravings<span> Cake Store</span></a>
      <div class="navbar-nav">
        <a href="tampilanuser.php">Shop Again!</a>
      </div>

      <div class="navbar-ekstra">
        <a href="keluar.php">Go out</a>
      </div>
    </nav>
    <!-- Navbar end -->

    <section class="landing" id="home">
    <main class="header">
        <h1>Your Order</h1>
        <p>Cravings Cake Store Has All You Need</p>
      </main>  
    </section>

    <section id="content" class="content">
    <main class="content">
            <?php
                $user=$_SESSION["user"];
                $q="SELECT * FROM transaksi WHERE status='Pending' AND iduser='".$user["id"]."'";
                $res=mysqli_query($conn,$q);
                if ($row=mysqli_fetch_assoc($res))
                {
                    $idtr=$row["id"];

                    ?>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Amount</td>
                                        <td>Price</td>
                                        <td>Subtotal</td>

                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
    // Variabel untuk menyimpan total harga
    $total_price = 0;

    // Query untuk mendapatkan detail transaksi
    $q = "SELECT dt.*, m.nama 
          FROM detail_transaksi dt 
          INNER JOIN menu m ON (m.id = dt.idmenu) 
          WHERE dt.idtransaksi = '".$idtr."'";
    $res = mysqli_query($conn, $q);

    // Menampilkan setiap item dalam transaksi
    while ($row = mysqli_fetch_assoc($res)) {
        // Menambahkan nilai subtotal ke dalam total_price
        $total_price += $row["subtotal"];
        ?>
        <tr>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["jumlah"]; ?></td>
            <td style="text-align:right"><?php echo number_format($row["harga"]); ?></td>
            <td style="text-align:right"><?php echo number_format($row["subtotal"]); ?></td>
            <td><a href="deletesc.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
        </tr>
        <?php
    }
?>

                                </tbody>
                            </table>
                            
                    <?php
                }
                else {
                    echo "Belum memiliki belanjaan";
                }
            ?>
            <a href="checkout.php" style="margin-left: 40px; color:white; font-size:20px">Checkout</a>
                </section>
    <!-- Tak tambahi javascript dikit ya biar responsive -->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
