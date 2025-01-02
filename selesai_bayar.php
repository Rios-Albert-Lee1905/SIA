<?php
        include "database.php";
        $jumlah=mysqli_real_escape_string($conn,$_GET["jumlah"]);
        $id=mysqli_real_escape_string($conn,$_GET["id"]);
        $user=$_SESSION["user"];


        echo "Jumlah ".$jumlah;
        echo "<br/> Barang ".$id;
        echo "<br/> User ".$user["id"];

        $idt="";
        $q="SELECT * FROM transaksi WHERE status='Pending' AND iduser='".$user["id"]."'";
        $res=mysqli_query($conn,$q);
        if ($row=mysqli_fetch_assoc($res))
        {
            $idt=$row["id"];
            $q="UPDATE transaksi SET status='Checkout' WHERE id='$idt'";
            mysqli_query($conn,$q);
            echo "Thank You!";
        }
        else {
        }
       header("location:thanku.php");
?>