<?php

// show errors
if ($registration->errors)
{
  foreach ($registration->errors as $error)
  {
    echo '<div class="alert alert-error">';
    echo '<a class="close" data-dismiss="alert">×</a>';
    echo $error;
    echo '</div>';  
  }
}

// show messages
if ($registration->messages)
{
  foreach ($registration->messages as $message)
  {
    echo '<div class="alert alert-info">';
    echo '<a class="close" data-dismiss="alert">×</a>';
    echo $message;
    echo '</div>';  
  }
}
