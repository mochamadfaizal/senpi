<div id="border-tabel">
<h2>Berita</h2>
<table id="example" class="display table table-bordered" width="100%" cellspacing="0">
	<thead>
	<tr>
		<th></th>
		<th>Judul</th>
		<th>Tanggal</th>
		<th>Kategori</th>
        <th>Puskesmas</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
<?php
	if(!empty($_SESSION['userid'])){
	$userid=$_SESSION['userid'];
    $query = mysqli_query($konek,"
        SELECT * 
        FROM berita INNER JOIN kategori
        ON berita.id_kategori = kategori.id_kategori 
		where berita.id_user='".$userid."'
    ");
}
else if (!empty($_SESSION['adminid'])){
	$query = mysqli_query($konek,"
        SELECT * 
        FROM berita INNER JOIN kategori
        ON berita.id_kategori = kategori.id_kategori 
    ");
}
	while($row = mysqli_fetch_object($query)) {
		$query1 = mysqli_query($konek,"
        SELECT * 
        FROM user where id_user = '$row->id_user'
    ");
    $has = 	mysqli_fetch_object($query1);
?>
	<tr>
		<td><img src="img/<?=$row->gambar?>" height="50" /></td>
		<td><?=$row->judul?></td>
		<td><?=$row->tgl;?></td>
		<td><?=$row->nm_kategori?></td>
        <td><?=$has->username?></td>
		<td><a href="indexuser.php?page=berita&id=<?=$row->id?>">Edit</a> | <a href="proses.php?i=del_berita&id=<?=$row->id?>">Delete</a></td>
	</tr>
<?php
	}
?>
	</tbody>
</table>
</div>

<?php 
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$ambil = mysqli_query($konek,"SELECT * FROM berita WHERE id='$id' ");
		$row = mysqli_fetch_object($ambil);
		
        $id_kat = $row->id_kategori;
        $judul = $row->judul;
        $isi = $row->isi;
        $tgl = $row->tgl;
        $gambar = $row->gambar;
        
		$action = "proses.php?i=edit_berita";
		$tombol = "Edit";
	} else { 
		$id = '';
		
        $id_kat = '';
        $judul = '';
        $isi = '';
        $tgl = date('Y-m-d');
        $gambar = '';
		
		$action = "proses.php?i=simpan_berita";
		$tombol = "Simpan";
	 } 
?>


<?php
	if(!empty($_SESSION['userid'])){
		?>
<br/><br/><hr/>
<div id="formtambah">
	<h3 class="title" align="center">TAMBAH BERITA</h3>
	<form action="<?=$action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
        
		  <input type='hidden' name='id' value='<?=$id?>' />
            <div class="form-group">
				<label for="" class="col-sm-3 control-label">Kategori</label>
                <div class="col-sm-6">
                    <select name="id_kat" class="form-control">
                    <?php
                        $kat = mysqli_query($konek,"SELECT * FROM kategori");
                        while($row_kat = mysqli_fetch_object($kat))
                        {
                            if($row_kat->id_kategori == $id_kat) {
                                ?><option value="<?= $row_kat->id_kategori; ?>" selected><?= $row_kat->nm_kategori; ?></option><?php
                            } else {
                                ?><option value="<?= $row_kat->id_kategori; ?>"><?= $row_kat->nm_kategori; ?></option><?php
                            }
                        }
                              
                    ?>
                    </select>
                </div>
			</div>
        
			<div class="form-group">
				<label for="" class="col-sm-3 control-label">Judul</label>
                <div class="col-sm-6">
				<input type="text" name="judul" value="<?=$judul?>" class="form-control" />
                </div>
			</div>
        
            <div class="form-group">
				<label for="" class="col-sm-3 control-label">Isi</label>
                <div class="col-sm-6">
                <textarea name="isi" class="form-control"><?=$isi?></textarea>
                </div>
			</div>
        
            <div class="form-group">
				<label for="" class="col-sm-3 control-label">Tanggal</label>
                <div class="col-sm-6">
                   
                    <input type="date" name="tgl" value="<?=$tgl?>" class="form-control" />
                </div>
			</div>
        
            <div class="form-group">
				<label for="" class="col-sm-3 control-label">Gambar</label>
                <div class="col-sm-6">
				<input type="file" name="gambar" value="<?=$gambar?>" class="form-control" />
                </div>
			</div>
			
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
			 <input type="submit" value="<?=$tombol?>" class="btn btn-default"/>
            </div>
        </div>
		
	</form>
</div>

<?php 
}
?>
