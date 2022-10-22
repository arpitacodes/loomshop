<?php 
	$connection = mysqli_connect("localhost","root","","sutshop");


    //****  *Categories  **

	//** *Clothtypes Categories **

function getClothtypes() {
	global  $connection;
		$get_clothtypes = "SELECT * FROM clothtypes";
		$run_clothtypes = mysqli_query($connection, $get_clothtypes);

		while ($row_clothtypes = mysqli_fetch_array($run_clothtypes)) 
		{                        // code...

		    $cloth_id = $row_clothtypes['clothtype_id'];
		    $cloth_type = $row_clothtypes['cloth_type'];
		         
		    echo "<li class='panel-list-item'><a href='index.php?clothtypes=$cloth_id'>$cloth_type </a></li>";               

		}

}



//** *season Categories **

function getSeasons(){
		global  $connection;
	$get_season = "SELECT * FROM season";
    $run_season = mysqli_query($connection, $get_season);

      while ($row_season = mysqli_fetch_array($run_season)) 
      {                        // code...

          $season_id = $row_season['season_id'];
          $season_name = $row_season['season_name'];
         
 		 echo "<li class='panel-list-item'><a href='index.php?seasons=$season_id'> 
  			$season_name</a></li>";
               

      }
}



 //******************** to Get Products on page **********

 function getProducts() {
 		global  $connection;
 	  $get_products = "SELECT * FROM products ORDER BY rand()"; //LIMIT
            
            $runs_products = mysqli_query($connection, $get_products);
          
            while($row_products = mysqli_fetch_array($runs_products)) 
            {

              $product_id = $row_products['products_id'];
              $product_title = $row_products['products_title'];
              $product_description = $row_products['product_description'];
              $clothtype_id = $row_products['clothtype_id'];
              $season_id = $row_products['season_id'];
              $product_price = $row_products['product_price'];
              $product_img = $row_products['product_img1'];
              //$product_brand = $row_products['brand_id'];

               // single product starts 

              echo "
                <div class='single_product'>

                  <h3 class='product_head3'>$product_title</h3>

                  <img src='./admins_area/products_images/$product_img' width='150' height='150' /> 
                  <br>

                  <p><b>Price: $product_price Rs./INR </b></p>

                  <div class='img_a'>
                    <a href='details.php?products_id=$product_id' style='float:left;'>Details</a>
                    <a href='idex.php?add_cart=$product_id'><button style='float:right;'>Add to Cart</button></a>
                  </div>  <br>   

                </div>               

              ";
              // single product ends

            }
 }



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		
  .single_product{
    width: 15%;
    height: auto;
    border: none;
    border-radius: 4px;
    margin-bottom: 10px;
    box-shadow: 0 0 10px hsl(0deg 0% 0% / 25%);
    padding: 6px 3px;
    margin-left: 15px;

    
  }

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
.img_a > a:hover {color: var(--salmon-pink);}
.img_a > button:hover {color: var(--salmon-pink);}

	</style>
</head>
<body>
	
</body>
</html>