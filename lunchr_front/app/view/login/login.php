<?php include_once('../app/view/include/header.inc.php'); ?>
<section class="container login">
 <?php if(isset($_GET['mail_exist'])) {
                          if($_GET['mail_exist'] = 1)
                          {
                            ?>
                            <div class='notifications mail_exist'></div>
                            <?php
                          }
                        }
?>

    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="fb_content_register col-lg-10 col-lg-offset-1">
                <div class="barre col-lg-4"></div>
                <h1 class='col-lg-4 text-center main_color font_open_sansbold'>Register</h1>
                <div class="barre col-lg-4"></div>
                <div class="">
                   </div> 
            </div>
            <div class="own_content_register col-lg-10 col-lg-offset-1">
                <form class="form-horizontal col-sm-10" role="form" method="post">
                	 <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Civility</label>
                        <div class="col-sm-8">
                            <label class="radio-inline" for="radios-0">
                                  <input type="radio" name="gender_user" id="radios-0" value="Female" checked="checked">
                                  Female
                                </label> 
                                <label class="radio-inline" for="radios-1">
                                  <input type="radio" name="gender_user" id="radios-1" value="Male">
                                  Male
                                </label> 
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">First name</label>
                        <div class="col-sm-8">
                            <input name="nom_user" type="text" class="form-control" placeholder="First name" required>
                        </div>
                    </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Last Name</label>
                    <div class="col-sm-8">
                      <input name="prenom_user" type="text" class="form-control" placeholder="Last Name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-8">
                      <input name="email_user" type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Phone</label>
                        <div class="col-sm-8">
                            <input name="phone_user" type="tel" class="form-control" id="inputEmail3" placeholder="Phone" required>
                        </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-8">
                      <input name="mdp_user" type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Country</label>
                    <div class="col-sm-8">
                    <select name="country_user" class="form-control">
                      <option selected>France</option>
                      <option>Italie</option>
                      <option>Engleterre</option>
                      <option>Espagne</option>
                      <option>Allemagne</option>
                    </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                      <input type="submit" class="btn btn-danger btn-default" value="Register" />
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once('../app/view/include/footer.inc.php'); ?>