<?php
session_start();
    include '../config/koneksi.php';
    $i = $_GET['i'];
	$id_user=$_SESSION['userid'];

    $domain = $_POST['domain'];
if($_SESSION['Captcha']!=$_POST['nilaiCaptcha']) {
	echo "Captcha Salah";
	?><a href="login.php"> Kembali</a>
	<?php
}
else
if($i == 'login') {
	if($domain=="admin"){
		$user = $_POST['username'];
		$pass = md5($_POST['password']);
		
        
        $cekuser = mysqli_query($konek,"SELECT * FROM admin WHERE username = '$user' ");
        $jumlah = mysqli_num_rows($cekuser);
        $hasil = mysqli_fetch_array($cekuser);
        if($jumlah == 0) {
            echo "User ID Belum terdaftar!<br/>";
            echo "<a href=\"login.php\">&laquo; Back</a>";
        } else {
            if($pass <> $hasil['password']) {
                echo "Password Salah!<br/>";
                echo "<a href=\"login.php\">&laquo; Back</a>";
            } else {
                session_start();
                $_SESSION['adminid'] = "$user";
                header('location:index.php');
            }
        }
	}
	if($domain=="user"){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$level = $_POST['level'];
        
        $cekuser = mysqli_query($konek,"SELECT * FROM user WHERE username = '$user' ");
        $jumlah = mysqli_num_rows($cekuser);
        $hasil = mysqli_fetch_array($cekuser);
        if($jumlah == 0) {
            echo "User ID Belum terdaftar!<br/>";
            echo "<a href=\"login.php\">&laquo; Back</a>";
        } else {
            if($pass <> $hasil['password']) {
                echo "Password Salah!<br/>";
                echo "<a href=\"login.php\">&laquo; Back</a>";
            } else {
                session_start();
                $_SESSION['userid'] = $hasil['id_user'];
				$_SESSION['username'] = $hasil['username'];
                header('location:indexuser.php');
            }
        }
	}
}
	
	if($i == 'logout') {
		session_start();
		unset($_SESSION['adminid']);
		unset($_SESSION['userid']);
		header('location:login.php');
	}

    /*--------------------------------- BERITA ------------------------- */
    if($i == 'simpan_berita') {
    	if(!isset($_SESSION)) {
    		session_start();
    	}
    	
		$id = $_POST['id'];
		$id_kat = $_POST['id_kat'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$tgl = $_POST['tgl'];
        $username = $_SESSION['userid'];
        $namagambar = $_FILES['gambar']['name'];
		if(is_uploaded_file($_FILES['gambar']['tmp_name'])) {
			move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$namagambar);
		}
		
		$query = mysqli_query($konek,"INSERT INTO berita VALUES(
		'',
		'$id_kat',
		'$username',
		'$judul',
		'$isi',
		'$tgl',
		'$namagambar',
		'$id_user'
		)");
   
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:indexuser.php?page=berita');
		}
	}
	
	if($i == 'edit_berita') {
		$id = $_POST['id'];
		$id_kat = $_POST['id_kat'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$tgl = $_POST['tgl'];
        
        $namagambar = $_FILES['gambar']['name'];
		if(is_uploaded_file($_FILES['gambar']['tmp_name'])) {
			move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$namagambar);
            mysqli_query($konek,"UPDATE berita SET gambar = '$namagambar' WHERE id='$id'");
		}
		
		$query = mysqli_query($konek,"UPDATE berita SET 
		id_kategori = '$id_kat',
		judul = '$judul',
		isi = '$isi',
		tgl = '$tgl' 
        WHERE id = '$id'
		");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:indexuser.php?page=berita');
		}
	}
	
	if($i == 'del_berita') {
		$id = $_GET['id'];
		$query = mysqli_query($konek,"DELETE FROM berita WHERE id = '$id' ");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:indexuser.php?page=berita');
		}
	}

/*--------------------------------- KATEGORI ------------------------- */
    if($i == 'simpan_kat') {
		$id_kat = $_POST['id_kat'];
		$nm_kat = $_POST['nm_kat'];
		
		$query = mysqli_query($konek,"INSERT INTO kategori VALUES(
		'',
		'$nm_kat'
		)");
   
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:indexuser.php?page=kategori');
		}
	}
	
	if($i == 'edit_kat') {
		$id_kat = $_POST['id_kat'];
		$nm_kat = $_POST['nm_kat'];
		
		$query = mysqli_query($konek,"UPDATE kategori SET 
		nm_kategori = '$nm_kat'
        WHERE id_kategori = '$id_kat'
		");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:indexuser.php?page=kategori');
		}
	}
	
	if($i == 'del_kat') {
		$id_kat = $_GET['id_kat'];
		$query = mysqli_query($konek,"DELETE FROM kategori WHERE id_kategori = '$id_kat' ");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:indexuser.php?page=kategori');
		}
	}

/*--------------------------------- DATA ------------------------- */
    if($i == 'simpan') {
		$id = $_POST['id'];
		$id_pus = $_POST['id_pus'];
		$nama = $_POST['nama'];
		$kecamatan = $_POST['kecamatan'];
		$alamat= $_POST['alamat'];
		
		$query = mysqli_query($konek,"INSERT INTO pus_baru VALUES(
		'',
		'$id_pus','$nama','$kecamatan','$alamat'
		)");
   
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:index.php?page=data');
		}
	}
	
	if($i == 'edit') {
		$id = $_POST['id'];
		$id_pus = $_POST['id_pus'];
		$nama = $_POST['nama'];
		$kecamatan = $_POST['kecamatan'];
		$alamat= $_POST['alamat'];
		
		$query = mysqli_query($konek,"UPDATE pus_baru SET 
		id_pus = '$id_pus',nama = '$nama',kecamatan='$kecamatan',alamat ='$alamat'
        WHERE id = '$id'
		");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:index.php?page=data');
		}
	}
	
	if($i == 'del') {
		$id= $_GET['id'];
		$query = mysqli_query($konek,"DELETE FROM pus_baru WHERE id = '$id' ");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:index.php?page=data');
		}
	}

/*--------------------------------- PROFILE ------------------------- */
	if($i == 'simpan') {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$rumpunSDMK = $_POST['rumpunSDMK'];
		$subrumpunSDMK= $_POST['subrumpunSDMK'];
		$jenisSDMK = $_POST['jenisSDMK'];
		
		$query = mysqli_query($konek,"INSERT INTO pus_margadadi VALUES(
		'',
		'$nama','$rumpunSDMK','$subrumpunSDMK','$jenisSDMK'
		)");
   
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:indexuser.php?page=profile');
		}
	}
	
	if($i == 'edit') {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$rumpunSDMK = $_POST['rumpunSDMK'];
		$subrumpunSDMK = $_POST['subrumpunSDMK'];
		$jenisSDMK= $_POST['jenisSDMK'];

		
		$query = mysqli_query($konek,"UPDATE pus_margadadi SET 
		nama = '$nama',rumpunSDMK = '$rumpunSDMK',subrumpunSDMK='$subrumpunSDMK',jenisSDMK ='$jenisSDMK'
        WHERE id = '$id'
		");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:indexuser.php?page=profile');
		}
	}
	
	if($i == 'del') {
		$id= $_GET['id'];
		$query = mysqli_query($konek,"DELETE FROM pus_margadadi WHERE id = '$id' ");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:indexuser.php?page=profile');
		}
	}
?>
