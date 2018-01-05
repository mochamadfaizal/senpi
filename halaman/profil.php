<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$nmdb = 'senpi2';

$konek = mysqli_connect($host, $user, $pass, $nmdb);
?>					
<!-- start: Wrapper -->	
	<div id="wrapper">		

		<!-- start: Container -->	
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">
			<!-- start: Profil -->
			<div class="title" align="center"><h1>Data Puskesmas Indramayu</h1></div>
			<div class="Container">
				
			          <table class="table table-bordered">
			           <thead>
			                  <tr>
			                    <th><h3>No</h3></th>
			                    <th><h3>Id Puskesmas</h3></th>
			                    <th><h3>Nama Puskesmas</h3></th>
			                    <th><h3>Kecamatan</h3></th>
			                    <th><h3>Alamat</h3></th>
			                  </tr>
			             </thead>
			             <tbody>

			                      <?php
			                     
			                     	$query = mysqli_query($konek,"SELECT * FROM pus_baru ");

                     				 while($Nama = mysqli_fetch_array($query)){

			                      
			                        echo "<tr>";

			                        echo "<td>".$Nama['id']."</td>";
			                        echo "<td>".$Nama['id_pus']."</td>";
			                        echo "<td>".$Nama['nama']."</td>";
			                        echo "<td>".$Nama['kecamatan']."</td>";
			                        echo "<td>".$Nama['alamat']."</td>";

			                        echo "</tr>";
			                      }
			                      ?>

			  </tbody>

			          </table>

      </div>

          			
        	</div>
					<!-- end: Profil  -->
				
			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container -->
				
  	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">

			<!-- start: Row -->
			<div class="row">


				<!-- start: Footer Menu Links-->
				<div class="span9">


				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">

					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>

				</div>
				<!-- end: Footer Menu Back To Top -->

			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">

		<!-- start: Container -->
		<div class="container">

			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span7">

					<h3>About Us</h3>
					<p>
						Puskesmas sebagai jasa pelayanan kesehatan, membutuhkan komputer sebagai alat pemrosesan data dan informasi. Puskesmas yang kesehariannya memberikan pelayanan kesehatan kepada masyarakat, merupakan instansi kesehatan yang berkembang dengan cepat seiring bertambahnya penduduk. Kualitas pelayanan kepada pasien merupakan hal pokok yang senantiasa menjadi titik sentral setiap Puskesmas oleh sebab itu Puskesmas membutuhkan suatu sistem informasi yang mampu memberikan informasi yang cepat kepada pasien dan masyarakat.

					</p>

				</div>
				<!-- end: About -->

				<div class="span4">

					<!-- start: Follow Us -->
					<h3>Follow Us!</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="http://twitter.com"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="http://twitter.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="http://facebook.com"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="http://facebook.com"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-flickr">
											<a href="http://flickr.com"></a>
										</div>
										<div class="social-info-back social-flickr-hover">
											<a href="http://flickr.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- end: Follow Us -->


				</div>

			</div>
			<!-- end: Row -->	

		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->