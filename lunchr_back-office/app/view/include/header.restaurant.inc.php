<ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=restaurants&action=index">Listes des restaurants<br/> activés</a></li>
    <li role="presentation"<?php if($_GET['action']=='activer_desactiver_resto') { echo' class="active"'; } ?>><a href="index.php?module=restaurants&action=activer_desactiver_resto">Listes des restaurants en attentes</a></li>
    <li role="presentation"<?php if($_GET['action']=='resto_non_actif') { echo' class="active"'; } ?>><a href="index.php?module=restaurants&action=resto_non_actif">Listes des restaurants non activés</a></li>
    <li role="presentation"<?php if($_GET['action']=='ajouter_resto') { echo' class="active"'; } ?>><a href="index.php?module=restaurants&action=ajouter_resto">Ajouter un<br/> restaurant</a></li>
</ul>