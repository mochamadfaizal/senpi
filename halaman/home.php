<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2></i>Berita Puskesmas</h2>
			<!-- end: Container  -->

			</div>	

		</div>
	</div>
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
  

      		<!-- start: Row -->

        		<?php
					$host = 'localhost';
					$user = 'root';
					$pass = '';
					$nmdb = 'senpi2';

					$konek = mysqli_connect($host, $user, $pass, $nmdb);
					

					$query = mysqli_query($konek,"SELECT *, LEFT(berita.isi, 200) as isi_pendek FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori 
					ORDER BY berita.id DESC LIMIT 10
					");

					if(isset($_GET['k'])) {
					    $k = $_GET['k'];
					    $query = mysqli_query($konek,"SELECT *, LEFT(berita.isi, 200) as isi_pendek FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori 
					WHERE berita.id_kategori = '$k' 
					ORDER BY berita.id DESC
					");
					}
   					 
					$jum = mysqli_num_rows($query);

					if($jum < 1) {
					    echo "<center>Data Kosong!</center>";
					    echo "<hr/>";
					}
					while($row = mysqli_fetch_object($query)) {
					    ?>

					<div class="row">
					    <div class="col-md-4">
					        <img src="admin/img/<?=$row->gambar?>" height="150px" width="150px" />
					    </div>
					    <div class="col-md-8">
					        <h2><?= $row->judul; ?></h2>
					        <p>Kategori: <?= $row->nm_kategori; ?></p>
					        <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <?= date("d F Y", strtotime($row->tgl)); ?></p>
					        <article>
					            <p><?= $row->isi_pendek; ?>... </p><a href="index.php?page=detail-berita&id-berita=<?= $row->id; ?>" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Detail</a>
					        </article>
					    </div>
					</div>
					<hr/>
					<br/>


		    <?php
		}

?>
      	
			<!-- end: Row -->

				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
		</div>
		<!--end: Container-->
			

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span8">
					
					<h3>About Us</h3>
					<p>
							Puskesmas sebagai jasa pelayanan kesehatan, membutuhkan komputer sebagai alat pemrosesan data dan informasi. Puskesmas yang kesehariannya memberikan pelayanan kesehatan kepada masyarakat, merupakan instansi kesehatan yang berkembang dengan cepat seiring bertambahnya penduduk. Kualitas pelayanan kepada pasien merupakan hal pokok yang senantiasa menjadi titik sentral setiap Puskesmas oleh sebab itu Puskesmas membutuhkan suatu sistem informasi yang mampu memberikan informasi yang cepat kepada pasien dan masyarakat.
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">
					
					<h3 style="text-align: center;">We are here!</h3>
					<iframe id="map" width="210" height="210" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.891998053193!2d108.2803372142601!3d-6.407911964451917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb87d1fcaf97d%3A0x4fc15b3c8407ada4!2sPoliteknik+Negeri+Indramayu!5e0!3m2!1sid!2sid!4v1514875337026" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<!-- end: Photo Stream -->
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->