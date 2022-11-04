<?php
  
   include("head.php");//./pages/
   include("header.php");
    $connection = mysqli_connect("localhost","root","","sutshop");
             
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
            
      $countProduct = mysqli_num_rows($runs_product_details);
            if($countProduct == 0) {echo "<h2><b>NO</b> Products Found!!</h2>";}
            else
                                      //mysql_fetch_assoc
                while($row_product_details = mysqli_fetch_array($runs_product_details)) 
                {

                  $product_id = $row_product_details['products_id'];
                  $product_title = $row_product_details['products_title'];
                  $product_description = $row_product_details['product_description'];
                  $clothtype_id = $row_product_details['clothtype_id'];
                  $season_id = $row_product_details['season_id'];
                  $product_price = $row_product_details['product_price'];
                  $product_img = $row_product_details['product_img1'];
                  //$product_brand = $row_product_details['brand_id'];

                   // single product starts 

                  echo "
                    <div class='single_product'>

                      <h3 class='product_head3'>$product_title</h3>

                      <img class='ProductImage' src='./admins_area/products_images/$product_img' width='170' height='180' /> 
                     
                      <p><b>Price: $product_price Rs./INR </b></p>

                      <div class='img_a'>
                        <a href='productsDetail.php?products_id=$product_id' style='float:left;'> Details</a>
                        <a href='idex.php?add_cart=$product_id'><button style='float:right;' >Add to Cart</button></a>
                      </div>  <br>   

                    </div>               

                     ";
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