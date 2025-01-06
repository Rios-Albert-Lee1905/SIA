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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <style>
        .payment-section {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            margin: 20px auto;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .payment-section p {
            margin-top: 15px;
        }
        .payment-info {
            margin-bottom: 15px;
        }

        .payment-info p {
            font-size: 18px;
        }

        input#payment {
            padding: 10px;
            font-size: 16px;
            width: 95%;
            margin: 10px 0;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
 $total_price = 0;

    // Query untuk mendapatkan detail transaksi
    $q = "SELECT dt.*, m.nama 
          FROM detail_transaksi dt 
          INNER JOIN menu m ON (m.id = dt.idmenu) 
          WHERE dt.idtransaksi = '".$idtr."'";
    $res = mysqli_query($conn, $q);
    // Inisialisasi subtotal (dapat diambil dari data belanja)
    $subtotal += $row["subtotal"]; ;
    ?>

    <div class="payment-section">
        <h2>Metode Pembayaran :</h2>
        <h5>Transfer</h5>
        <div class="payment-info">
            <p><strong>Subtotal:</strong> Rp <?= number_format($subtotal, 0, ',', '.') ?></p>
            <form method="post" action="selesai_bayar.php">
                <label for="payment">Uang Pembeli:</label>
                <input type="number" id="payment" name="payment" placeholder="Masukkan jumlah uang" required>
                <input type="hidden" name="subtotal" value="<?= $subtotal ?>">
                <button type="submit">Bayar</button>
            </form>
        </div>
    </div>
</body>
</html>
