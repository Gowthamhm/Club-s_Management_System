<?php
   include('config.php');
   session_start();
         if(!isset($_SESSION['user'])){
           echo '<script type="text/javascript">';
echo 'window.location.href="../alogin.php";';
echo '</script>';
         }
       else{
// echo "$_SESSION[user]";
// echo "$_SESSION[club]";
       }
?>
