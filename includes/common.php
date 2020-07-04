<?php
$con = mysqli_connect("localhost:3308", "root", "Mani@123", "store") or die(mysqli_error($con));
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}


