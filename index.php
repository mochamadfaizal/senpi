<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>SENPI</title> 
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="img/Senpi.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/non-responsive.css" rel="stylesheet">


	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	<div id="page-title">
		<div id="page-title-inner">
			<!-- start: Container -->
			<div class="Container">
				<div class="header">
			   		<div>
			      		<div class="pull-right">
			        		<img src="img/senpi.ico" width="130px" height="130px"></a>
			      		</div>
			      	</div>
			    </div>
			    <div class="header">
			      	<div class="pull-left">
			        	<img src="img/logo1.PNG" width="120px" height="120px"></a>
			      	</div>
			    </div>
			      <br>
			    <div style="min-width:400px; max-width:100%;">
			      <h1 style="text-align: center; color: white;">Sentral Informasi Puskesmas Di Indramayu</h1>
			      <h4 style="text-align: center; color: white;">Jl. MT. Haryono No.09, Sindang, Penganjang, Sindang, Kabupaten Indramayu, Jawa Barat 45221</h4>
			    </div>
			    <div class="clearfix"></div>

			</div>
			<!-- end: Container  -->
		</div>
	</div>

		</div>
	</div>
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container" style="width:80%;">
			
			<!--start: Row -->
			<div class="row">
				
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar">
			          		
			          		
			            		<ul class="nav pull-right">
			              			<li><a href="index.php?page=home">Home</a></li>
			              			<li><a href="index.php?page=pelayanan">Pelayanan</a></li> 
			              			<li><a href="index.php?page=profil">Profil</a></li>
			            		</ul>

			          		
			        	</div>
			      	</div>
					
				
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->

	<div class="header">

	<?php 
	
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "halaman/home.php";
			break;
			case 'detail-berita':
				include "halaman/detail-berita.php";
			break;
			case 'pelayanan':
				include "halaman/pelayanan.php";
			break;
			case 'profil':
				include "halaman/profil.php";
			break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
			break;
		}
	}else{
		include "halaman/home.php";
	}

	 ?>

	</div>
	

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<p>
				&copy; 2017, D3TI21C .  designed by K5
			</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>