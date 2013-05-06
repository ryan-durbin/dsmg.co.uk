<?php
if($login->isUserLoggedIn() && !LOGIN_ENABLED)
{
  header('Location: index.php?logout');
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Main -->
    <meta charset="utf-8">
    <title><?php echo($site_name); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Styles -->
    <link href="<?php echo $cdn_location; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $cdn_location; ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo $cdn_location; ?>/css/main.css" rel="stylesheet">
    
    <!-- Icons !-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $cdn_location; ?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $cdn_location; ?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $cdn_location; ?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $cdn_location; ?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo $cdn_location; ?>/ico/favicon.png">
    
    <!-- Javascript !-->
    <script src="<?php echo $cdn_location; ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $cdn_location; ?>/js/bootstrap.min.js" type="text/javascript"></script>
    
  </head>
  
  <body>
    
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="home"><?php echo($site_name); ?></a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <?php
                $nav->addLink($page, $login->isUserLoggedIn(), "Home", false);
                $nav->addLink($page, $login->isUserLoggedIn(), "Members", true);
                $nav->addLink($page, $login->isUserLoggedIn(), "Contact", false);
                $nav->addLink($page, $login->isUserLoggedIn(), "About", false);
                ?>
              </ul>
              <ul class="nav pull-right">
                <?php
                if($login->isUserLoggedIn())
                {
                  echo '<li><a href="index.php?logout">Logout</a></li>';
                }
                else
                {
                  if(LOGIN_ENABLED && SIGNUP_ENABLED)
                  {
                    echo '<li><a href="register">Sign Up</a></li>';
                    echo '<li class="divider-vertical"></li>';
                  }
                  if(LOGIN_ENABLED)
                  {
                    echo '<li class="dropdown">';
                    echo '<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>';
                    echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">';
                    echo '  <form method="post" action="" name="loginform">';
                    echo '    <input style="margin-bottom: 15px;" id="login_input_username" class="login_input" type="text" placeholder="Username" name="user_name" />';
                    echo '    <input style="margin-bottom: 15px;" id="login_input_password" class="login_input" type="password" placeholder="Password" name="user_password" autocomplete="off" />';
                    echo '    <input class="btn btn-primary btn-block" type="submit" id="submit" name="login" value="Submit" />';
                    echo '  </form>';
                    echo '</div>';
                  }
                }
                ?>
              </li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
      </div>
      <!--/.navbar-inner -->
    </div>
    <!--/.navbar -->
  
    <script>
    $(document).ready(function() {
      //Handles menu drop down
      $('.dropdown-menu').find('form').click(function (e)
      {
        e.stopPropagation();
      });
    });
    </script>
    
    <div class="container">
      <?php require_once("views/loginerrors.php"); ?>