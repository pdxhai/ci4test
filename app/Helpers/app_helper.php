<?php
if (! function_exists('view_r'))
{
  function view_r($arr)
  {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
  }
}
