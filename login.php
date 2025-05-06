<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
  echo "<script>alert('Login berhasil!'); window.location.href='halaman_beranda.php';</script>";
} else {
  echo "<script>alert('Login gagal! Username atau password salah.'); window.location.href='index.php';</script>";
}
?>