<?php

session_start();

session_unset();
session_decode();

header("location:index.php");
exit;


?>
   <?php require 'footer.php' ?>