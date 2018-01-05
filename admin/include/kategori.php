<div id="border-tabel">
<h2>DATA PUSKESMAS</h2>
<table id="example" class="display table table-bordered" width="100%" cellspacing="0">
	<thead>
	<tr>
		<th>ID</th>
        <th>Nama Kategori</th>
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
        FROM kategori
    ");
	
	while($row = mysqli_fetch_object($query)) {
?>
	<tr>
		<td><?=$row->id_kategori?></td>
		<td><?=$row->nm_kategori?></td>
		
        
		<td><a href="indexuser.php?page=kategori&id_kat=<?=$row->id_kategori?>">Edit</a> | <a href="proses.php?i=del_kat&id_kat=<?=$row->id_kategori?>">Delete</a></td>
	</tr>
<?php
	}
?>
	</tbody>
</table>
</div>

<?php 
	if(isset($_GET['id_kat'])) {
		$id_kat = $_GET['id_kat'];
		$ambil = mysqli_query($konek,"SELECT * FROM kategori WHERE id_kategori='$id_kat' ");
		$row = mysqli_fetch_object($ambil);
		
        $nm_kat = $row->nm_kategori;
     
        
		$action = "proses.php?i=edit_kat";
		$tombol = "Edit";
	} else { 
       
        $id_kat= '';
        $nm_kat = '';
        
		$action = "proses.php?i=simpan_kat";
		$tombol = "Simpan";
	 } 
?>



<br/><br/><hr/>
<div id="formtambah">
	<h3 class="title" align="center">TAMBAH KATEGORI</h3>
	<form action="<?=$action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
        
		  <input type='hidden' name='id_kat' value='<?=$id_kat?>' />
        
			<div class="form-group">
                <label for="" class="col-sm-3 control-label">Nama kategori</label>
                <div class="col-sm-3">
				<input type="text" name="nm_kat" value="<?=$nm_kat?>" class="form-control" />
                </div>
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
			 <input type="submit" value="<?=$tombol?>" class="btn btn-default"/>
            </div>
        </div>
		
	</form>
</div>