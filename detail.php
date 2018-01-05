<div class="row">
    <div class="col-md-8">
        <?php
            $berita = mysql_query("SELECT * FROM senpi WHERE id = '$id' ");
            $hasil = mysql_fetch_object($berita);
        ?>
        <br/>
        <h2><?= $hasil->judul; ?></h2>
        
        <img src="admin/img/<?= $hasil->gambar; ?>" height="100" with="100" align="left" class="img-thumbnail" />
        <p align="justify"><?php echo !empty($output['original'])? nl2br($output['original']) : "";?></p>
        <hr/>
        <!--
        <button class="ringkas btn btn-primary"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Ringkas</button><br/><br/>
        <div class="panel panel-info" id="panelringkas">
          <div class="panel-heading">
            <h3 class="panel-title">Hasil Ringkasan</h3>
          </div>
          <div class="panel-body">
              <p align="justify"><?php // echo !empty($output['summary'])? $output['summary'] : "";?></p>
          </div>
        </div>
        -->
        
        
    </div>
</div>
	    
