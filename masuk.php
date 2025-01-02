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
      <a href="index.php#home" class="navbar-logo">Cravings<span> Cake Store</span></a>
      <div class="navbar-nav">
        <a href="index.php#home">Home</a>
        <a href="index.php#about">About Us</a>
        <a href="menu.php">Menu</a>
        <a href="supplier.php">Our Supplier</a>
        <a href="index.php#contact">Contacts</a>
        <a href="gabung.php">Sign Up</a>
      </div>

      <div class="navbar-ekstra">
        <a href="logindulu.php" id="transaksi"><i data-feather="shopping-cart"></i></a>
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
            <h3>Please Enter Your Username and Password!</h3>
            <form method="POST" action="checkmasuk.php">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button style="padding:5px">Login</button>
                        </td>
                    </tr>
                </table>
            </form>
      </main>
    </section>
    <h3>Haven't joined us yet?</h3>
    <a href="gabung.php">Join here!</a>
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
