<ul class="nav nav-tabs nav-justified" role="tablist">
	<li role="presentation"<?php if($_GET['action']=='cmd_valider') { echo' class="active"'; } ?>><a href="index.php?module=commandes&action=cmd_valider">Commandes<br/>validées</a></li>
    <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=commandes&action=index">Commandes<br/>d'aujourd'hui</a></li>
    <li role="presentation"<?php if($_GET['action']=='cmd_demain') { echo' class="active"'; } ?>><a href="index.php?module=commandes&action=cmd_demain">Commandes<br/>de demain</a></li>
	<li role="presentation"<?php if($_GET['action']=='cmd_futur') { echo' class="active"'; } ?>><a href="index.php?module=commandes&action=cmd_futur">Commandes<br/>à venir</a></li>
	<li role="presentation"<?php if($_GET['action']=='cmd_historique') { echo' class="active"'; } ?>><a href="index.php?module=commandes&action=cmd_historique">Historique des<br/>commandes</a></li>
	<li role="presentation"<?php if($_GET['action']=='cmd_annule') { echo' class="active"'; } ?>><a href="index.php?module=commandes&action=cmd_annule">Commandes annulées</a></li>
</ul>