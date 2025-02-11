<div class="topHeader">
  <!-- container for left section -->
  <div class="left"></div>
  
  <!-- container for mid section (search bar) -->
  <div class="mid">
  <form action="" method="post">
        <input type="search" placeholder="Places to go, things to do, hotels..." name="search_text" required>
        <button type="submit" aria-label="Search"><i class="fa fa-search"></i></button>
    </form>
  </div>
  
  <!-- container for right section (user action & cart) -->
  <div class="right">
  <?php
    if (isset($_SESSION["UID"])) { ?>
      <span id="welcome-message">Welcome, <b><?php echo htmlspecialchars($_SESSION["userName"]); ?></b></span>
      <a href="/Earthcation/MODULES/USER_MANAGEMENT_MODULE/AUTH/logout.php" class="logout-button" title="logout">
        <div class="logout-icon">
          <i class="fas fa-sign-out-alt" id="logout-icon"></i>
        </div>
      </a>
    <?php
    }
  ?>

    <div class="cart-icon">
      <i class="fas fa-shopping-cart" id="cart-icon"></i>
      <?php
          if (isset($_SESSION["cart_item"])) {
            $countItem = count($_SESSION["cart_item"]);
            echo "<b>($countItem)</b>";
          } else {
            echo "<b id='cart-count'>(0)</b>";
          }
        ?>
    </div>

  </div>
</div>