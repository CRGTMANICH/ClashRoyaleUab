<?php

  include 'controller/IndexController.php';

  if (isset($_GET['modo']))
  {
      $menu = new IndexController($_GET['modo']);
      $menu->Menu();
  }
  else
  {
    $menu = new IndexController("default");
    $menu->Menu();
  }

?>
