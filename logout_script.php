<?php
  session_start();
   /*if(!isset($_SESSION['email'])){
      header("location: index.php");
      
  }*/
  session_unset();
  session_destroy();
 
  header("location: index.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

