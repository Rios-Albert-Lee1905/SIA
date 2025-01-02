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
        }
        else {
            $q="INSERT INTO transaksi (iduser,tanggal,status) VALUES ('".$user["id"]."',SYSDATE(),'Pending') ";
            mysqli_query($conn,$q);
            $idt=mysqli_insert_id($conn);
        }

        $p="SELECT * FROM menu WHERE id='$id'";
        $res=mysqli_query($conn,$p);
        $datamenu=mysqli_fetch_assoc($res);
        $harga=$datamenu["harga"];
        $Stock = $datamenu["Stock"];
        $terjual = $datamenu["terjual"];
        $terjualnow = $terjual + $jumlah;
        $stocknow = $Stock - $jumlah;
        $subtotal=$harga*$jumlah;
        $q="SELECT * FROM detail_transaksi WHERE idtransaksi='$idt' AND idmenu='$id'";
        $res=mysqli_query($conn,$q);
        if ($row=mysqli_fetch_assoc($res))
        {
            $q="UPDATE detail_transaksi SET Jumlah='$jumlah',subtotal='$subtotal' WHERE ID='".$row["id"]."'";
            mysqli_query($conn,$q);
            $p = "UPDATE menu SET stock = '$stocknow' WHERE id='$id'";
            mysqli_query($conn, $p);
        }
        else {
            $q="INSERT INTO detail_transaksi (idtransaksi,idmenu,harga,jumlah,subtotal) ".
               "VALUES ('$idt','$id','$harga','$jumlah','$subtotal')";
               mysqli_query($conn,$q);
            $p = "UPDATE menu SET stock = '$stocknow', terjual = '$terjualnow' WHERE id='$id'";
            mysqli_query($conn, $p);
        }

        header("location:tampilanuser.php");
?>