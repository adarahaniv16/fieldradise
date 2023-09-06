<?php
session_start();

include 'koneksi.php';
$email=$_POST['email'];
$password=$_POST['password'];
$query=mysqli_query($koneksi,"SELECT * FROM admin WHERE email='$email' AND password='$password'")
or die(mysqli_error($koneksi));

if ($data=mysqli_fetch_array($query)){
    $_SESSION["email"]=$data["email"];
    $_SESSION["alert"]="BERHASIL LOGIN";
    header("Location:jadwal.php");
}else{
    $_SESSION["alert"]="Email/Password Salah";
    header("Location:login.php");
}
?>