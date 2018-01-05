<div id="border-tabel">
<h2>PROFILE PEGAWAI</h2>
<table id="example" class="display table table-bordered" width="100%" cellspacing="0">
	<thead>
	<tr>
		<th>NO</th>
        <th>NAMA</th>
         <th>RUMPUN SDMK</th>
          <th>SUBRUMPUN SDMK</th>
		<th>JENIS SDMK</th>
		<th>ACTION</th>
	</tr>
	</thead>
	<tbody>
<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$nmdb = 'senpi2';
	
	$id_user =$_SESSION ['userid'];

	$konek = mysqli_connect($host, $user, $pass, $nmdb);
    $query = mysqli_query($konek,"
        SELECT * 
        FROM pus_margadadi
		where id_user='$id_user' 
    ");
	
	while($row = mysqli_fetch_object($query)) {
?>
	<tr>
		<td><?=$row->id?></td>
		<td><?=$row->nama?></td>
		<td><?=$row->rumpunSDMK?></td>
		<td><?=$row->subrumpunSDMK?></td>
		<td><?=$row->jenisSDMK?></td>
        
		<td><a href="indexuser.php?page=profile&id=<?=$row->id?>">Edit</a> | <a href="proses.php?i=del&id=<?=$row->id?>">Delete</a></td>
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
		$ambil = mysqli_query($konek,"SELECT * FROM pus_margadadi WHERE id='$id' ");
		$row = mysqli_fetch_object($ambil);
		
        $nama = $row->nama;
        $rumpunSDMK = $row->rumpunSDMK;
        $subrumpunSDMK = $row->subrumpunSDMK;
        $jenisSDMK = $row->jenisSDMK;
        
		$action = "proses.php?i=edit";
		$tombol = "Edit";
	} else { 
        $id = '';
        $nama = '';
        $rumpunSDMK= '';
        $subrumpunSDMK = '';
        $jenisSDMK = '';
        
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
				<label for="" class="col-sm-3 control-label">Nama pegawai</label>
                <div class="col-sm-3">
				<input type="text" name="nama" value="<?=$nama?>" class="form-control" />
                </div>
                <label for="" class="col-sm-3 control-label">Rumpun SDMK</label>
                <div class="col-sm-3">
				<input type="text" name="rumpunSDMK" value="<?=$rumpunSDMK?>" class="form-control" />
                </div>
                <label for="" class="col-sm-3 control-label">Subrumpun SDMK</label>
                <div class="col-sm-3">
				<input type="text" name="subrumpunSDMK" value="<?=$subrumpunSDMK?>" class="form-control" />
                </div>
                <label for="" class="col-sm-3 control-label">Jenis SDMK</label>
                <div class="col-sm-3">
				<input type="text" name="jenisSDMK" value="<?=$jenisSDMK?>" class="form-control" />
                </div>
            </div>
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
			 <input type="submit" value="<?=$tombol?>" class="btn btn-default"/>
            </div>
        </div>
		
	</form>
</div>