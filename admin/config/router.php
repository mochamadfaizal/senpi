<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : 'main';
switch($page) {
    case 'kategori'    : include "include/kategori.php"; break;
    case 'berita'    : include "include/berita.php"; break;
    case 'data'    : include "include/data.php"; break;
    case 'profile'    : include "include/profile.php"; break;
    
    case 'main'     :
        default     : include "include/home.php";
}
?>
