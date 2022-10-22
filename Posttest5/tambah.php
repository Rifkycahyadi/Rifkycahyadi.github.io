<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $masakan = $_POST['masakan'];
    $daerah = $_POST['daerah'];
    $resep = $_POST['resep'];

    $kirim = mysqli_query($db, "INSERT INTO isi (masakan,daerah,resep) VALUES ('$masakan','$daerah','$resep')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:home.php");
    }else {
        echo "gagal mengirim";
    }
}