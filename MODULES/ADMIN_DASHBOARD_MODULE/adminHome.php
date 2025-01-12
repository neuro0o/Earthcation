<?php
  session_start();
  // include db config
  include("../../../Earthcation/CONFIG/config.php");  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- cdn icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- utils css file -->
    <link rel="stylesheet" href="../../../Earthcation/CSS/MISC/utils.css">

    <!-- headerBanner css file -->
    <link rel="stylesheet" href="../../../Earthcation/CSS/MISC/headerBanner.css">

    <!-- topNav css file -->
    <link rel="stylesheet" href="../../../Earthcation/CSS/MISC/topNav.css">

    <!-- topHeader css file -->
    <link rel="stylesheet" href="../../../Earthcation/CSS/MISC/topHeader.css">

    <!-- adminHome css file -->
    <link rel="stylesheet" href="../../../Earthcation/CSS/ADMIN/adminHome.css">

    <title>ADMIN HOME</title>
  </head>
  <body>

    <!-- include topNav.php -->
    <?php include '../../INCLUDES/topHeader.php'; ?>
    
    <!-- include adminNav.php -->
    <?php include '../../INCLUDES/adminNav.php'; ?>

    <!-- include headerBanner.php -->
    <?php include '../../INCLUDES/headerBanner.php';?>
    

    <section class="adminHome">
      <h1>
      THIS IS ADMIN HOME PAGE
      </h1><br><br>

      <a href="../USER_MANAGEMENT_MODULE/AUTH/logout.php">
        LOGOUT HERE
      </a>
    </section>

    <!-- include topNav.js -->
    <script src="../../../Earthcation/JS/topNav.js"></script>

  </body>
</html>