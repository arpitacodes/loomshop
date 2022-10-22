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
          <p>Hello There!! 
            <b>Welcome</b>
            on this site
          </p>  
          <!-- <marquee>Hello There!!<b>Welcome<b/>on this site<marquee/> -->
        </div>

        <div class="header-top-actions">    

        </div>

         
      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="index.php" class="header-logo">
           <img src=".\images\fuully1.PNG" alt="Sutworld's logo" width="150" height="40"> 
        <!--   <img src="https://img.freepik.com/premium-vector/needle-thread-silhouette-icon-vector-illustration-tailor-logo-with-needle-symbol-curvy_98734-420.jpg?w=150" alt="S for Sutwala"> -->
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            
            <ion-icon class="fa-solid fa-magnifying-glass" name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            
            <ion-icon class="fa-solid fa-user" name="person-outline"></ion-icon>
          </button>

          <button class="action-btn">
            <ion-icon class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline"></ion-icon>
            <!-- <i class="fas fa-cart-shopping" name="bag-handle-outline" ></i> -->
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="index.php" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="clothCategory.php" class="menu-title">Categories</a>

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

    <?php
        include("mobileLook.php");
    ?>

  </header>

<!-- header ends here -->