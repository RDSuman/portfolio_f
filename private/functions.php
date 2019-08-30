<?php


function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function image_path($str='')
{

    if(substr_count(__FILE__,'admin'))
    {
      $image_path='public/img/'.$str;
    }
    else $image_path='img/'.$str;

    return $image_path;

}







 ?>
