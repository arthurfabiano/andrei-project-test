<?php 
  include_once('layout/header.php');
  include_once('layout/left-menu.php');
  include_once('layout/navbar.php');

  if (!empty($page) || !file_exists($page)) 
  {
    include_once('pages/'. $page .'.php');
  } 
  else
  {
    include_once('pages/404.php');
  }	 
  
  include_once('layout/footer.php');