<ul class="nav nav-tabs nav-justified" role="tablist">
	<li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=utilisateurs&action=index">Listes des utilisateurs Pro</a></li>
	<li role="presentation"<?php if($_GET['action']=='afficher_users') { echo' class="active"'; } ?>><a href="index.php?module=utilisateurs&action=afficher_users">Listes des utilisateurs</a></li>
	<li role="presentation"<?php if($_GET['action']=='afficher_users_supp') { echo' class="active"'; } ?>><a href="index.php?module=utilisateurs&action=afficher_users_supp">Demandes de suppression</a></li>
	<li role="presentation"<?php if($_GET['action']=='ajouter_users') { echo' class="active"'; } ?>><a href="index.php?module=utilisateurs&action=ajouter_users">Ajouter un utilisateur</a></li>
</ul>