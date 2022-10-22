<!-- mobile bottom button navigation -->

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon class="fa-sharp fa-solid fa-bars" name="menu-outline"></ion-icon>
        <!-- <i class="fa-sharp fa-solid fa-bars" name="menu-outline"></i> -->
      </button>
 

      <button class="action-btn">
        <!-- <i class="fas fa-home"></i> -->
        <ion-icon  class="fas fa-home" name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <!-- <i class="fas fa-cart-shopping" name="bag-handle-outline" ></i> -->
        <!-- <i class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline"></i> -->
        <ion-icon class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline" ></ion-icon>
        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <!-- <i class="fa-solid fa-border-all"></i>  user icon for login-->
        <ion-icon class="fa-solid fa-border-all" name="grid-outline"></ion-icon>
      </button>

    </div>


    <!--  -->

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon class="fa-solid fa-xmark" name="close-outline"></ion-icon>
          <!-- <i class="fa-solid fa-xmark"  name="close-outline"></i> -->
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Cloths Types</p>

            <div>
              <ion-icon class="fa-regular fa-plus" name="add-outline" class="add-icon"></ion-icon>                
              <ion-icon class="fa-solid fa-minus" name="remoe-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>
            <?php getClothtypes(); ?> 
          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Season</p>

            <div>
              <ion-icon class="fa-regular fa-plus" name="add-outline" class="add-icon"></ion-icon>                
              <ion-icon class="fa-solid fa-minus" name="remoe-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <?php  getSeasons(); ?>

        </ul>

      </li>
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

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="a-solid fa-caret-left"></ion-icon>
              <!-- <i class="fa-solid fa-caret-left" name="caret-back-outline"></i> -->
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon class="fa-brands fa-facebook" name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon class="fa-brands fa-twitter" name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon class="fa-brands fa-instagram" name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon class="fa-brands fa-linkedin" name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>