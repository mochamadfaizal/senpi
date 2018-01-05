<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$nmdb = 'senpi2';

$konek = mysqli_connect($host, $user, $pass, $nmdb) or die('gagal koneksi ke database');

if($konek){
}
    
else {echo '
<center>
<p>error <font size="500px" color="#666">505</font></p>
<h3><font color="#cc88aa" >Gagal koneksi</font></h3>
<p>
    <font size="2px" >
        Cek file 
        <font color="#cc88aa" >
            config/koneksi.php
        </font> 
        dan sesuaikan dengan konfigurasi mysql
    </font>
</p>
</center>
<hr/>
';
}
?>
