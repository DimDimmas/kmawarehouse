<?php
ob_start();
//Membuat Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
 
//CEK LOGIN USER
  if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
  }
  ob_end_flush();
?>