<?php
$host = "localhost";
$user = "root"; // sesuaikan jika tidak pakai root
$pass = ""; // default XAMPP tidak ada password
$db   = "ecommercetugas6"; // ganti sesuai nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
