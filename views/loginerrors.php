<?php

// show errors
if ($login->errors)
{
  foreach ($login->errors as $error)
  {
    echo '<div class="alert alert-error">';
    echo '<a class="close" data-dismiss="alert">×</a>';
    echo $error;
    echo '</div>';  
  }
}

// show messages
if ($login->messages)
{
  foreach ($login->messages as $message)
  {
    echo '<div class="alert alert-info">';
    echo '<a class="close" data-dismiss="alert">×</a>';
    echo $message;
    echo '</div>';  
  }
}
