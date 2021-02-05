<?php

  session_start();

  if($_SESSION['cargo'] == 1){
    header('location: ../view/admin/admin.php');
  }
 ?>
