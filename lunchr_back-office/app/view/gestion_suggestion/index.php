<?php include_once('../app/view/include/header.inc.php'); ?>

      <div class="col-lg-12">
        <h1> Gestion des suggestions </h1>
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=gestion_suggestion&action=index">Suggestions actuelle</a></li>
            <li role="presentation"<?php if($_GET['action']=='modifier_suggestion') { echo' class="active"'; } ?>><a href="index.php?module=gestion_suggestion&action=modifier_suggestion">Modification suggestion</a></li>
        </ul>
      </div>

<!-- Form Name -->
<legend>Suggestions actuelle :</legend>
<br/>
<br/>

<?php foreach ($gestion_suggestion as $key => $row) {
      echo"<div class='form-group'>"; 
      echo'<label class="col-md-3 control-label" for="textinput">Suggestion :</label>';
      echo"<div class='col-md-6'>";
      echo'<div>'.$row['lr_nom'].' <br/> '.$row['lr_adresse'].'</div>';
      echo"</div>";
      echo"</div>";
      echo'<br/>';
      echo"<br/>";
}
?>


<?php include_once('../app/view/include/footer.inc.php'); ?>