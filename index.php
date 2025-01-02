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
      <a href="#" class="navbar-logo">Cravings Cake Store</a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="menu.php">Menu</a>
        <a href="supplier.php">Our Supplier</a>
        <a href="#contact">Contact</a>
        <a href="masuk.php">Login</a>
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
        <h1>
          Cravings Cake Store Has All You Need
        </h1>
        <p>
          Your one-stop shop for premium baking essentials – where every recipe begins with quality!
        </p>
      </main>
    </section>
    <!-- Landing page end -->

    <!-- About section start -->
    <section id="about" class="about">
      <h2>About Us</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/aboutus.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Why should it be cravings cake store?</h3>
          <p>
          Because we offer only the finest ingredients 
          to bring your baking dreams to life. 
          From premium flours to rich chocolates and delightful toppings, 
          we ensure quality in every product. With competitive prices, 
          friendly service, and a passion for baking, Cake Cravings is here to make every creation extraordinary. 
          Let us be your trusted partner in crafting sweet moments!
          </p>
        </div>
      </div>
    </section>
    <!-- About section end -->

    <!-- Contact section start -->
    <section id="contact" class="contact">
      <h2> Our Contacts!</h2>
      <p>
      Have questions or need assistance? We’re here to help! 
      Contact us today:
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126438.2836607938!2d112.63178300000003!3d-7.978645350000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62822063dc2fb%3A0x78879446481a4da2!2sMalang%2C%20Kota%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1685603977575!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
        <div class="sosmed">
          <i data-feather="instagram"> </i>
          <h3>@Cravings_CakeStore</h3>
        </div>
        <div class="sosmed">
          <i data-feather="twitter"> </i>
          <h3>@Cravings_CakeStore</h3>
        </div>
        <div class="sosmed">
          <i data-feather="mail"> </i>
          <h3>cravings.cakestore@gmail.com</h3>
        </div>
        <div class="sosmed">
          <i data-feather="phone"> </i>
          <h3>0825 4237 8545</h3>
        </div>
      </div>
    </section>
    <!-- Contact section end -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
