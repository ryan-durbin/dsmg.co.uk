<?php

if (!$login->isUserLoggedIn())
{
  $page_title = "401";
  include('pages/401.php');
  include('views/footer.php');
  die();
}
