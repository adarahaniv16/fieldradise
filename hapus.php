<?php
session_start();
include 'koneksi.php';

if (isset($_SESSION["email"])) {
    $namaTim=$_GET['namaTim'];

    $query=mysqli_query($koneksi,"DELETE from user where namaTim='$namaTim' ")
    or die(mysqli_error($koneksi));

    if($query){
        header("Location: jadwal.php");
    }else{
        echo"Gagal";
    }
}else{
    header("Location:login.php");
}

?>