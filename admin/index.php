<html>
    <head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="img/Senpi.ico">
    <title></title>
  	<script src="../assets/js/jquery-1.11.2.min.js"></script>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/dashboard.css" rel="stylesheet">
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="./tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
      tinyMCE.init({
        selector: "textarea"
      })
    </script>
	
    
	<!-- UNTUK TABEL -->
		<style type="text/css" title="currentStyle"> 
			@import "../assets/css/demo_table_jui.css";
			@import "../assets/css/TableTools.css";
		</style>
		
		<script type="text/javascript" src="js/calendar.js"></script>
		<link rel="stylesheet" href="css/cal.css" />
        
        <script type="text/javascript" language="javascript" src="../assets/js/slide.js"></script>
		
		<script type="text/javascript" language="javascript" src="../assets/js/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" src="../assets/js/ZeroClipboard.js"></script>
		<script type="text/javascript" language="javascript" src="../assets/js/TableTools.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable({ 
					"sPaginationType": "full_numbers",
					"sDom": 'T<"clear">lfrtip',
					"oTableTools": {
						"sSwfPath": "../assets/swf/copy_csv_xls_pdf.swf"
					}
				});
			} );
		</script>
        
	   <script language="JavaScript">
			function angka(e) {
				if(!/^[0-9]+$/.test(e.value)) {
					e.value = e.value.substring(0, e.value.length-1);
				}
			}
			
			function huruf(h) {
				if(!/^[a-zA-Z .]+$/.test(h.value)) {
					h.value = h.value.substring(0, h.value.length-1);
				}
			}
		</script>
    </head>
    <body>
        <?php
          $host = 'localhost';
          $user = 'root';
          $pass = '';
          $nmdb = 'senpi';

          $konek = mysqli_connect($host, $user, $pass, $nmdb);
            include "config/cek.php";
        ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href='index.php'><?=$nm?></a></li>-->
            <div class="btn-group" role="group">
            <div class="btn-group" role="group">
              <label type="label" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: grey; padding-top: 15px;">
                <?=$nm?>
                <span class="caret"></span>
              </label>
              <ul class="dropdown-menu">
                <li><a href="index.php?page=data">Data</a></li>
                <li><a href="index.php?page=berita">Berita</a></li>
              </ul>
            </div>
          </div>
            <li><a href='proses.php?i=logout'>Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
          </form>
        </div>
      </div>
    </nav>
        
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class=""><a href='index.php'>Dashboard <span class="sr-only">(current)</span></a></li>
              
              
            <li><a href='index.php?page=data'>Data</a></li>
            <li><a href='index.php?page=berita'>Berita</a></li>
            <li><a href='proses.php?i=logout'>Logout</a></li>
          </ul>
            
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">     
         
        <?php
            include "config/router.php";
        ?>
        </div>
      </div>
    </div>
         <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
