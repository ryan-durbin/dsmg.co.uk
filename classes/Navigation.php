<?php

class Navigation {
  
  public function addLink($page, $loggedin, $name, $protected) {
    if ($protected && $loggedin)
    {
      echo '<li ';
      if ($page == strtolower($name))
      {
        echo 'class="active" ';
      }
      echo '><a href="';
      echo strtolower($name);
      echo '">';
      echo $name;
      echo '</a></li>';
    }
    else if (!$protected)
    {
      echo '<li ';
      if ($page == strtolower($name))
      {
        echo 'class="active" ';
      }
      echo '><a href="';
      echo strtolower($name);
      echo '">';
      echo $name;
      echo '</a></li>';
    }
  }
  
}
