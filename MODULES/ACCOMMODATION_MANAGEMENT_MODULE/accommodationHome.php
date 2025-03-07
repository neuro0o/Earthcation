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

    <!-- accommodationHome css file -->
    <link rel="stylesheet" href="../../../Earthcation/CSS/ACCOMMODATION/accommodationHome.css">

    <title>ACCOMMODATION HOME</title>
  </head>
  <body>

    <!-- include topNav.php -->
    <?php include '../../INCLUDES/topHeader.php'; ?>
    
    <!-- include accommodationNav.php -->
    <?php include '../../INCLUDES/accommodationNav.php'; ?>

    <!-- include headerBanner.php -->
    <?php include '../../INCLUDES/headerBanner.php';?>
    

    <section class="accommodationHome">
      <h1 style="text-align: center;">
        -- START OF ACCOMMODATION HOME PAGE --
      </h1><br><br>
    </section>

    <!-- include topNav.js -->
    <script src="../../../Earthcation/JS/topNav.js"></script>

  </body>
</html>