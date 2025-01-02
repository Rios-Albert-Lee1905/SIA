<?php
    include "database.php";
    
    // Query untuk mendapatkan semua piutang
    $q = "SELECT * FROM master_piutang";
    $res = mysqli_query($conn, $q);
    
    echo "<h3>Daftar Piutang</h3>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Amount</th><th>Created At</th></tr>";
    
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>Rp " . number_format($row['amount'], 2) . "</td>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
?>
