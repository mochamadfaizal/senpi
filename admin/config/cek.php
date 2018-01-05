<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$nmdb = 'senpi2';

$konek = mysqli_connect($host, $user, $pass, $nmdb) or die('gagal koneksi ke database');



if(isset($_SESSION['adminid'])) {
    $usr = $_SESSION['adminid'];
    $query = mysqli_query($konek,"SELECT * FROM admin WHERE username='$usr'");
    $hasil = mysqli_fetch_object($query);
    
    $nm = $hasil->nm_admin;
}else if(isset($_SESSION['userid'])) {
    $usr = $_SESSION['userid'];
    $query = mysqli_query($konek,"SELECT * FROM user WHERE id_user='$usr'");
    $hasil = mysqli_fetch_object($query);
    
    $nm = $hasil->nama;
} else {
    header('location:login.php');
}

?>
