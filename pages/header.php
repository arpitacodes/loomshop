  <?php 
  //session_start();
  include_once("./functions/indexFunction.php"); 
  ?>

  <!--    - HEADER  -->

  <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
             <!-- <i class="fa-brands fa-facebook" name="logo-facebook"></i> -->
              <ion-icon class="fa-brands fa-facebook" name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <!-- <i class="fa-brands fa-twitter" name="logo-twitter"></i>  -->
              <ion-icon  class="fa-brands fa-twitter" name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <!-- <i class="fa-brands fa-instagram" name="logo-instagram"></i> -->
              <ion-icon class="fa-brands fa-instagram" name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <!-- <i class="fa-brands fa-linkedin" name="logo-linkedin"></i> -->
              <ion-icon class="fa-brands fa-linkedin" name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news" ><!-- style="width:55%" -->
          
          <?php 
            if(!isset($_SESSION['customer_email'])){
              echo "<p>Hello There!! <b>Welcome</b> on this site</p> ";
            }
            else{
              echo "<b>Welcome!! </b><p style='display: inline-block;'>". $_SESSION['customer_email'] ."</p>";
            }
          ?>
          <!-- <marquee>Hello There!!<b>Welcome<b/>on this site<marquee/> -->
        </div>

       

        <div class="header-top-actions">    

        </div>

         
      </div>

    </div>

  <div class="header-nav-container">

    <div class="header-main">

      <div class="container">

        <a href="index.php" class="header-logo">
           <img src=".\images\fuully1.PNG" alt="Sutworld's logo" width="150" height="40"> 
        <!--   <img src="https://img.freepik.com/premium-vector/needle-thread-silhouette-icon-vector-illustration-tailor-logo-with-needle-symbol-curvy_98734-420.jpg?w=150" alt="S for Sutwala"> -->
        </a>

        <div class="header-search-container" id="search_box">
          
          <form action="searchResults.php" method="GET" enctype="multipart/form-data">

            <input type="text" name="user_query" class="search-field" placeholder="Search...">
            <button class="search-btn">              
                <!-- <ion-icon class="fa-solid fa-magnifying-glass" name="search"></ion-icon> -->
                <input type="submit" name="search" value="Search" style="color: #454545; font-size:17px">
            </button>

          </form>

        </div>

        <!--  -->
        <div class="header-user-actions">
       
          <div class="userlogout">
             <span class="logoutt" style="padding: 3px;">
              <?php 
              if(!isset($_SESSION['customer_email'])){
                echo "<a href='checkout.php' style='color:#454545; font-size:17px; margin-top: 7px'>Login</a>";
              }
              else
              {
                echo "<a href='customerLogout.php' style='color:#454545; font-size:17px; margin-top: 7px'>Logout</a>";
              }
              ?>
            </span>
         

          </div>

          <div class="userOutline">

              <button class="action-btn"> 
                <a href="./customers/myAccount.php">           
                  <ion-icon class="fa-solid fa-user" name="person-outline"></ion-icon>
                </a>  
              </button>

          </div>
          
          <div class="shoppingcart">

              <button class="action-btn">

                <a href="cart.php">
                  <ion-icon id="cart-btn" class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline"></ion-icon>
                </a>
                <!-- <i class="fas fa-cart-shopping" name="bag-handle-outline" ></i> -->

                <span class="count">
                  <?php   getItems();    ?>                  
                </span>

              </button>
              
              <!-- <div class="checkout">
                <a href="cart.php">Check Out</a>
              </div> -->

          </div>   
         

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a  href="index.php" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#clothCategory.php" class="menu-title">Categories</a>
          </li>
            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Cloths Types</a>
                </li>
                <?php
                   getClothtypes();
                ?> 
              </ul>

               <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Seasons</a>
                </li>
                <?php                
                   getSeasons();
                ?> 
              </ul>
            </div>

<!-- This is Blog categories  -->
          <li class="menu-category">
            <a href="#" class="menu-title">Blog</a>
          </li>
<!-- This is Offer categories  -->
          <li class="menu-category">
            <a href="#adnim_panel.php" class="menu-title">Becoms a Saler</a>
          </li>
<!-- This is Contact Us categories  -->
           <li class="menu-category">
            <a href="#contact_us.php" class="menu-title">Contact Us</a>
          </li>
          
           <p style="font-size: 12px; display: inline-flex;" >Total Price: <?php 
          // (float)$totalprice = (float)$totalprice*(float)$quantity;
            getTotalPrice(); ?>&nbsp;</p> 
        </ul>

      </div>

    </nav>
</div>    


    <?php
        include("mobileLook.php");
    ?>
 <?php
        /*$ip =get_client_ip();
        echo $ip;*/
        insertIntoCart();
  ?>
  </header>

<!-- header ends here -->

<style>
  .search-btn > input[type="submit"] {
    display: block;
    width: 100%;
    font: inherit;
    border: none;
    background: none;
}
.search-btn > input[type="submit"]:hover { color: var(--salmon-pink); }

.checkout{
  display: none;
}


</style>
