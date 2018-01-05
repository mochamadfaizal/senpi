<div id="border-tabel">
<h2>DATA PUSKESMAS</h2>
<table id="example" class="display table table-bordered" width="100%" cellspacing="0">
	<thead>
	<tr>
		<th>NO</th>
		<th>ID</th>
        <th>NAMA</th>
         <th>KECAMATAN</th>
          <th>ALAMAT</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$nmdb = 'senpi2';

	$konek = mysqli_connect($host, $user, $pass, $nmdb);
    $query = mysqli_query($konek,"
        SELECT * 
        FROM pus_baru
    ");
	
	while($row = mysqli_fetch_object($query)) {
?>
	<tr>
		<td><?=$row->id?></td>
		<td><?=$row->id_pus?></td>
		<td><?=$row->nama?></td>
		<td><?=$row->kecamatan?></td>
		<td><?=$row->alamat?></td>
        
		<td><a href="index.php?page=data&id=<?=$row->id?>">Edit</a> | <a href="proses.php?i=del&id=<?=$row->id?>">Delete</a></td>
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
		$ambil = mysqli_query($konek,"SELECT * FROM pus_baru WHERE id='$id' ");
		$row = mysqli_fetch_object($ambil);
		
		$id_pus = $row->id_pus;
        $nama = $row->nama;
        $kecamatan = $row->kecamatan;
        $alamat = $row->alamat;
        
		$action = "proses.php?i=edit";
		$tombol = "Edit";
	} else { 
        $id = '';
        $id_pus = '';
        $nama = '';
        $kecamatan = '';
        $alamat = '';
        
		$action = "proses.php?i=simpan";
		$tombol = "Simpan";
	 } 
?>



<br/><br/><hr/>
<div id="formtambah">
	<h3 class="title" align="center">FORM PUSKESMAS</h3>
	<form action="<?=$action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
        
		  <input type='hidden' name='id' value='<?=$id?>' />
        
			<div class="form-group">
				<label for="" class="col-sm-3 control-label">Id Puskesmas</label>
                <div class="col-sm-3">
				<input type="text" name="id_pus" value="<?=$id_pus?>" class="form-control" />
                </div>
                <label for="" class="col-sm-3 control-label">Nama Puskesmas</label>
                <div class="col-sm-3">
				<input type="text" name="nama" value="<?=$nama?>" class="form-control" />
                </div>
                <label for="" class="col-sm-3 control-label">Kecamatan</label>
                <div class="col-sm-3">
				<input type="text" name="kecamatan" value="<?=$kecamatan?>" class="form-control" />
                </div>
                <label for="" class="col-sm-3 control-label">Alamat</label>
                <div class="col-sm-3">
				<input type="text" name="alamat" value="<?=$alamat?>" class="form-control" />
                </div>
            </div>
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
			 <input type="submit" value="<?=$tombol?>" class="btn btn-default"/>
            </div>
        </div>
		
	</form>
</div>