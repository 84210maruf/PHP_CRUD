<?php
  /*Menu Dynamic Part*/
  @$pg = $_GET['page'];
  /*Design Part*/
  require_once("includes/layouts/header.php");
  require_once("includes/layouts/nav.php");
  require_once("includes/layouts/right.php");
  // This part is Dynamic by Navigation
  if($pg=="")
    require_once("includes/contents/home.php"); 
  else if($pg=="about")
    require_once("includes/contents/about.php");
  else if($pg=="download")
    require_once("includes/contents/download.php");
  require_once("includes/layouts/footer.php");
?>


