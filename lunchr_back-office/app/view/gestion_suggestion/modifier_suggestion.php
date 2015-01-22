<?php include_once('../app/view/include/header.inc.php'); ?>

      <div class="col-lg-12">
        <h1> Gestion des suggestions </h1>
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation"<?php if($_GET['action']=='index') { echo' class="active"'; } ?>><a href="index.php?module=gestion_suggestion&action=index">Suggestions actuelle</a></li>
            <li role="presentation"<?php if($_GET['action']=='modifier_suggestion') { echo' class="active"'; } ?>><a href="index.php?module=gestion_suggestion&action=modifier_suggestion">Modification suggestion</a></li>
        </ul>
      </div>

<!-- Form Name -->
<legend>Modification :</legend>
<br/>
<br/>

<form class="form-horizontal" name="formu_suggestion" action="" method="POST">
  <fieldset>
    <div class="container">
      <div class="row">


        <div class="col-md-3">
          <?php foreach ($gestion_suggestion as $key => $row) {
            echo'<label for="textinput">Suggestion '.$key.' :</label><input id="textinput" disabled="disabled" name="textinput" type="text" placeholder="'.$row['lr_nom'].'" class="form-control input-md"><br/>';
          }
          ?>
        </div>

        <div class="col-md-6">

          <?php foreach ($gestion_suggestion as $key => $row) { 
          echo'<label for="textinput">Nouvelle suggestion :</label>';
          echo'<select id="resto_suggestion" name="resto_suggestion'.$key.'" class="form-control">';
           foreach ($modifier_suggestion as $key => $row) { 
          echo'<option value="'.$row['lr_id'].'">'.$row['lr_nom'].'</option>';
        }
          echo'</select>'; 
          echo"<br/>";
          }
          ?>

          <!-- Button Valider -->
          <div class="form-group">
            <label class="col-md-3 control-label" for="singlebutton"></label>
            <div class="col-md-6">
              <input class="btn btn-lg btn-success btn-block" type="submit" value="Modifier" />
            </div>
          </div>

        </div>         

        </div>
      </div>
  

  </fieldset>
</form>


    


<?php include_once('../app/view/include/footer.inc.php'); ?>