<?php include_once('../app/view/include/header.inc.php'); ?>
        
        <div class="col-lg-12">
        	<h1> Administration des commandes </h1>
          		<ul class="nav nav-tabs nav-justified" role="tablist">
			        <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=commandes&action=index">Liste des commandes d'aujourd'hui</a></li>
			        <li role="presentation"<?php if($_GET['action']=='demain') { echo' class="active"'; } ?>><a href="index.php?module=commandes&action=demain">Liste des commandes de demain</a></li>
		  			<li role="presentation"<?php if($_GET['action']=='mois') { echo' class="active"'; } ?>><a href="index.php?module=commandes&action=mois">Liste des commandes du mois</a></li>
		  			<li role="presentation"<?php if($_GET['action']=='historique') { echo' class="active"'; } ?>><a href="index.php?module=commandes&action=historique">Historique des commandes</a></li>
				</ul>
        </div>
<?php include_once('../app/view/include/footer.inc.php'); ?>
     
             
                         