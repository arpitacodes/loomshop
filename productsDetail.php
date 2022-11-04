<?php
  
   include("./pages/head.php");
   include("./pages/header.php");
             
?> 

<!-- main Start here -->

  <main>
      
      <!-- products wrapper starting point -->
      <div class="product_wrapper">
<?php        
    if(isset($_GET['products_id'])){

      $products_details_id = $_GET['products_id'];

      $get_product_details="SELECT * FROM products WHERE products_id = '$products_details_id'";

      $runs_product_details = mysqli_query($connection, $get_product_details);
            
        while($row_product_details = mysqli_fetch_array($runs_product_details)) 
        {

                  $product_id = $row_product_details['products_id'];
                  $product_title = $row_product_details['products_title'];
                  $product_description = $row_product_details['product_description'];
                  $clothtype_id = $row_product_details['clothtype_id'];
                  $season_id = $row_product_details['season_id'];
                  $product_price = $row_product_details['product_price'];
                  $product_img1 = $row_product_details['product_img1'];
                  $product_img2 = $row_product_details['product_img2'];
                  $product_img3 = $row_product_details['product_img3'];

                  //$product_brand = $row_product_details['brand_id'];

                   // single product starts 

                  echo "
                    <div class='single_product'>

                      <h3 class='product_head3'>$product_title</h3>
                    <div style='display: flex; gap: 15px;'>
                      <img class='ProductImage1' src='./admins_area/products_images/$product_img1' width='170' height='180' /><br>
                      <img class='ProductImage2' src='./admins_area/products_images/$product_img2' width='170' height='180' />
                      <img class='ProductImage3' src='./admins_area/products_images/$product_img3' width='170' height='180' />
                    </div><br/>

                     ";
                     echo " <p><b>Description:</b>$product_description</p>                      
                      
                      <p><b>Price: $product_price Rs./INR </b></p>

                      <div class='img_a'>
                        <a href='index.php?products_id=$product_id' style='float:left;'>Home</a>
                        <a href='index.php?add_cart=$product_id'><button style='float:right;' >Add to Cart</button></a>
                      </div>  <br>   

                    </div> ";
                  // single product ends

       }
    }
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

<style>
  main{
    width: 100%;
    height: auto;
  }


  .product_wrapper {
    width: 100%;
    height: auto;   
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    margin-top: 10%;
    /*gap: 10px;*/
  }

  .single_product{
    width: 15%;
    height: 60%;
    border: none;
    border-radius: 4px;
    margin-bottom: 3%;
    box-shadow: 0 0 10px hsl(0deg 0% 0% / 25%);
    padding: 6px 3px;
    margin-left: 15px;

    
  }
  .ProductImage{padding-bottom: 5px;}

.product_head3 {
    width: 10rem;
    height: 15%;
    text-transform: uppercase;
}

.img_a > a, button {
    color: #2a5104;
    font-size: 12px;
    text-transform: uppercase;
  
}
.img_a>a:hover {color: var(--salmon-pink);}
.img_a > a button:hover {color: var(--salmon-pink);}

</style> 