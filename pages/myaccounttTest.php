


<header>
	
	<div class="header-nav-container">

   <div class="header-main">

      <div class="container">

        <a href="index.php" class="header-logo">
           <img src="..\images\fuully1.PNG" alt="Sutworld's logo" width="150" height="40"> 
        </a>

        <div class="header-search-container" id="search_box">
          
          <form action="searchResults.php" method="GET" enctype="multipart/form-data">

            <input type="text" name="user_query" class="search-field" placeholder="Search...">
            <button class="search-btn">              
               <input type="submit" name="search" value="Search" style="color: #454545; font-size:17px">
            </button>

          </form>

        </div>

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
                <a href="myAccount.php">       
                  <ion-icon class="fa-solid fa-user" name="person-outline"></ion-icon>
                </a>  
              </button>

          </div>
          
          <div class="shoppingcart">

              <button class="action-btn">

                <a href="cart.php">
                  <ion-icon id="cart-btn" class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline"></ion-icon>
                </a>
                <span class="count">
                  <?php   getItems();    ?>                  
                </span>

              </button>
              
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

            <div class="dropdown-panel" style="left: unset;right: 33%;">

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
        </ul>

      </div>

    </nav>
</div>    



  </header>