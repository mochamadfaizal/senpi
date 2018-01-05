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
				$id_berita=$_GET['id-berita'];
				
				//print $id_berita;
				
				$query = mysqli_query($konek, 
				"SELECT * FROM berita a
				INNER JOIN kategori b ON a.id_kategori = a.id_kategori 
				WHERE a.id = '$id_berita'
				");
				$tampil=mysqli_fetch_array($query);
				//print $tampil['judul']."<br>";
				//print $tampil['isi'];
				?>
				<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span8">
					<div class="col-md-12 col-sm-6">
					<h3><?php print strtoupper($tampil['judul']); ?></h3>
					<hr>
					<p>
					<img src="admin/img/<?=$tampil['gambar'];?>" height="350px" width="350px" />
					<?php print strtoupper($tampil['isi']); ?>
					</p>
				  </div>
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3" style="margin-top: 100px;">
					<div class="col-md-12 col-sm-6">
					<!-- isi kalender di sini -->
					<?php
					$month= date ("m");
					$year=date("Y");
					$day=date("d");
					$endDate=date("t",mktime(0,0,0,$month,$day,$year));
					echo '<font face="arial" size="2">';
					echo '<table align="center" border="0" cellpadding=5 cellspacing=5 style=""><tr><td align=center>';
					echo "Today : ".date("F, d Y ",mktime(0,0,0,$month,$day,$year));
					echo '</td></tr></table>';
					echo '<table align="center" border="0" cellpadding=1 cellspacing=1 style="border:1px solid #CCCCCC">
					<tr bgcolor="#EFEFEF">
					<td align=center><font color=red>Monday</font></td>
					<td align=center>Sunday</td>
					<td align=center>Tuesday</td>
					<td align=center>Wednesday</td>
					<td align=center>Thursday</td>
					<td align=center>Friday</td>
					<td align=center>Saturday</td>
					</tr>';
					$s=date ("w", mktime (0,0,0,$month,1,$year));
					for ($ds=1;$ds<=$s;$ds++) {
					echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"#FFFFFF\">
					</td>";}
					for ($d=1;$d<=$endDate;$d++) {
					if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
					$fontColor="#000000";
					if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
					echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
					if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
					echo '</table>'; 
					echo "<p style=\"text-align:center;color:#555;\"><a style=\"text-decoration:none;color:#555;\" href='http://suckittrees.com/'></a><a style=\"text-decoration:none;color:#555;\" href='http://Suckittrees.com'></a></p>";?>
					</div>
				</div>
				<!-- end: Photo Stream -->
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->
      	
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