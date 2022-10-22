<?php
  
   include("./pages/head.php");
   include("./pages/header.php");
             
?> 

<!-- main Start here -->

  <main>
      
      <!-- products wrapper starting point -->
      <div class="product_wrapper">
          
        <?php

         getProducts(); 
         getSeasonProducts();
         getClothTypeProducts();

        ?>

      </div>
      <!-- products wrapper endding point -->


    

<a href="./thankyou.php" > Thank you </a>


  </main>

<!-- main ends here -->


<!-- Footer Area -->
<?php 
    include("./pages/footer.php");

?>