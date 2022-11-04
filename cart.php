<?php
@session_start();
   include("./pages/head.php");
   include("./pages/header.php");
             
?> 



<!-- main Start here -->

  <main>
      
    <!-- cart wrapper starting point -->
      <div class="product_wrapper">
        <form action="cart.php" method="POST" enctype="multipart/form-data">
          <div class="cart_head" >
            <p>Remove</p>
            <p>Product(s)</p>
            <p>Quantity</p>
            <p>Total Price</p>
          </div>

          <?php 
          $ip_address = get_client_ip();

          $totalprice=0;

          $sel_price = "SELECT * FROM cart WHERE ip_address ='$ip_address'";

          $run_price = mysqli_query($connection,$sel_price);

          while($run_record = mysqli_fetch_array($run_price)){
            
            $product_id = $run_record['p_id'];

            $prod_price = "SELECT * FROM products WHERE products_id='$product_id'";

            $run_product_price = mysqli_query($connection,$prod_price);

            while($pro_price=mysqli_fetch_array($run_product_price)){

              $product_price=array($pro_price['product_price']);

              $product_title = $pro_price['products_title'];

              $product_img = $pro_price['product_img1'];

              $single_prod_price = $pro_price['product_price'];

              $values=array_sum($product_price);

             (float)$totalprice = (float)$totalprice + $values;

         
      ?>

          <div class="cart-ditails" >

            <div class="inputDiv"> 
              <p><input type="checkbox"  name="remove[]" value="<?php echo $product_id;?>"></p>
            </div>

            <div class="inputDiv">
              <p class="img_title"><?php echo $product_title; ?></p>
              <p><img src="./admins_area/products_images/<?php echo $product_img; ?>" height="80" width="80">
              </p>
            </div>

            <div class="inputDiv">
              <p><input type="text" name="quantity" value="" class="qty"></p>
            </div>

            <?php

                if(isset($_POST['update']))
                {
                  $quantity= $_POST['quantity']; 

                  $insert_quty="UPDATE cart SET quantity='$quantity' WHERE ip_address='$ip_address'";

                  $run_qty= mysqli_query($connection,$insert_quty);

                  (float)$totalprice = (float)$totalprice * (int)$quantity;
                  
                  if(!$run_qty)
                    echo "Tatal qty Error: ". mysqli_error($connection);
                  

                  if(!$totalprice)
                    echo  mysqli_error($connection);
                }
               
          

            ?>

            <div class="inputDiv">
              <p style="width: max-content;"><?php echo $single_prod_price; ?> <b style="font-size: 12px;">Rs</b>
            </p>
            </div>

          </div>

          
<?php    }
      }
?>
        <div class="totalPrice">
          <p id="totalQty"><b>Total Product(s) Quantity:</b> <?pdp  ?></p>
          <p id="totalPrice"><b>Total Price: </b><?php echo (float)$totalprice; ?> 
             <b style="font-size: 12px;">Rs</b>
          </p>
        </div>

          <div class="bottons">
            <button>
              <input type="submit" name="update" value="UPDATE CART">
            </button>
            <button>
              <input type="submit" name="continue" value="CONTINUE SHOPPING">
            </button>
            <button>
              <a  href="checkout.php" class="ckeckout" >check Out</a>
            </button>
          </div>
    
        </form>  

  <?php 
  function removeUpdateCart(){
    global $connection;
      if(isset($_POST['update'])){

        foreach($_POST['remove'] as $remove_id)
        {
          $delete_products = "DELETE FROM cart WHERE p_id = '$remove_id'";

          $run_delete = mysqli_query($connection,$delete_products);

          if($run_delete)
          {
            echo "<script>window.open('cart.php','_self')</script>";
          }
        }
      }

      if(isset($_POST['continue'])){
         echo "<script>window.open('index.php','_self')</script>";
      }
  }

  echo @$moveUpCart = removeUpdateCart();

  ?>  

      </div>
    <!-- cart wrapper endding point -->


</main>

<style>
  .product_wrapper {   
    justify-content: center;   
    margin-top: 8%;
   }
.cart_head{
    margin-left: 5px;
    margin-right: 5px;
    display: flex;
    gap: 8rem;
    font-size: 20px;
    justify-content: center;

}
.cart-ditails{
    height: auto;   
    padding: 18px;    
    margin: 8% 4% 0 2%;
    font-size: 20px;
    display: flex;
    gap: 10rem;
}

.img_title{
  width: max-content;
  font-size: 17px;
}
.qty{
  width: 3.5rem;
  margin-top: 5px;
}
.totalPrice{
    display: flex;
   justify-content: space-between;
    float: right;
    width: 45%;
    font-size: 14.5px;

}
#totalQty{

}

#totalPrice{

}
.bottons{
  margin-top: 5rem;
  display: flex;
  justify-content: space-between;
  margin-bottom: 7rem;
}
.bottons button input[type='submit']{
  border: 1px solid #454545;
  font-size: 15px;
  padding: 5px;
  border-radius: 3px;
}

.bottons .ckeckout{
  font-size: 15px; 
  color: #000;
  border: 1px solid #454545;
  padding: 5px;
  border-radius: 3px;
}
</style>