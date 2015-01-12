<?php include_once('../app/view/include/header.inc.php'); ?>
        
        <div class="col-lg-12">
        	<h1> Liste des clients </h1>
          		<ul class="nav nav-tabs nav-justified" role="tablist">
			        <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=commandes&action=index"></a></li>
				</ul>
        </div>
<?php include_once('../app/view/include/footer.inc.php'); ?>
     
             
                         