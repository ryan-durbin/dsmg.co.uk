<?php

include('config/general.php');

if($status_production)
{
  ini_set('display_errors','0');
  ini_set('display_startup_errors','0');
  error_reporting(0);
}
else
{
  ini_set('display_errors','1');
  ini_set('display_startup_errors','1');
  error_reporting(E_ALL ^ E_NOTICE);
}

include_once('config/login.php');
require_once("classes/Login.php");
require_once("classes/Navigation.php");

$login = new Login();

$nav = new Navigation();

if(isset($_GET['page']))
{
  $page = $_GET['page'];
  if(!file_exists("pages/" . $page . ".php"))
  {
    $page_title = "404";
    include('views/header.php');
    include('pages/404.php');
    include('views/footer.php');
    die();
  }
  else
  {
    $page_title = ucfirst($page);
    include('views/header.php');
    include('pages/' . $page . '.php');
    include('views/footer.php');
    die();
  }
}
else
{
  header('Location: home');
  die();
}
$page_title = "500";
include('views/header.php');
include('pages/500.php');
include('views/footer.php');
die();
