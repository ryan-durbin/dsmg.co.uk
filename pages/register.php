<?php require_once("classes/Registration.php"); ?>
<?php $registration = new Registration(); ?>
<?php require_once("views/registrationerrors.php"); ?>

<div class="page-header">
  <h1><?php echo $page_title; ?></h1>
</div>

<?php
if(!SIGNUP_ENABLED)
{
  echo '<p class="lead">Registration is disabled.</p>';
  include('views/footer.php');
  die();
}

?>

<form class="form-horizontal" action='' method="POST">
  <fieldset>

    <div class="control-group">
      <label class="control-label" for="user_name">Username</label>
      <div class="controls">
        <input id="login_input_username" class="login_input" type="text" name="user_name" />
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="user_email">Email</label>
      <div class="controls">
        <input id="login_input_email" class="login_input" type="text" name="user_email" />
      </div>
    </div>
 
    <div class="control-group">
      <label class="control-label" for="user_password_new">Password</label>
      <div class="controls">
        <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" autocomplete="off" />
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="user_password_repeat">Repeat Password</label>
      <div class="controls">
        <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" autocomplete="off" />
      </div>
    </div>
 
 
    <div class="control-group">
      <div class="controls">
        <button class="btn btn-primary" type="submit"  name="register" value="Register" >Register</button>
      </div>
    </div>
    
  </fieldset>
</form>
