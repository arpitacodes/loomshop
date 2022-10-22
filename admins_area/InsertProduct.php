<?php
  include_once("./includes/adminDBconnect.php");    

  	$form_complete = null;
  	$form_complete ?: true;
  if($form_complete)
  {
  	foreach ($_POST as $key => $value) 
  	{
  		if('product_submit' != $key)
  		{
  			if (is_array($value)) 
  			{
  			$value = implode(', ', $value);
  		    }
  		
  		echo "<p><b>". ucfirst($key). " is". "</b> is $value.</p>";
  	    }
    }
 }
  
 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Products</title>
	<style>
		body{
			font-family: serif, sans-serif;
		}
		.product_form{
			width: 75%;
			padding: 5px;
			padding-left: 15%;
			display: inline-block;
		}
		input, textarea {
			    background: transparent;
		}
		

		.wrapper_label_input{
			display: flex;
			gap: 1px;
			width: 55%;
			margin: 5px;
			
		}

		.label_aree{
			font-size: 16px;
			padding: 3px;
			width: 33%;
			
		}

		.all_select {
		    width: 70%;
		    display: flex;
		}

		.selectlabel {
		    width: 26.5%;
		    font-size: 18px;
		    font-style: oblique;
		}
		.wrapper_select_option {
		     width: 64%;
		    padding: 6px;
		}
		select#prod_select {
		        padding: 3px;
			    border-radius: 5px;
			    width: 39%;
			    }
	 	.input_submit{
	 		margin-top: 10px;
    		padding-left: 15%;
	 	}
	 	input#but_submit {
		    padding: 5px 10px;
		    border-radius: 5px;
		    font-size: 16.5px;
		}
		#input_submit_but{
			border: none;
			background: no-repeat;
		}
		

	</style>

</head>
<body>
    <?php  
		if( isset( $_POST['product_title']) && empty( trim($_POST['product_title'])))
		{
		  echo "<p class=\"alert\"style='color:red; font-size:22px;'>Product Name is required</p>";
		  exit;
		}					  
									 
    ?>


	<div class="product_form">
<!-- //action="InsertProduct.php" -->
		<form  name="container" action="InsertProduct.php" method="POST"  enctype="multipart/form-data">

			  <legend class="legened"><h2>To Insert Product Details</h2></legend>
				
				<div class="wrapper_label_input">
					
					<div class="label_aree">
						<label class="labless">Product's Name/Title</label><br>
					</div>

					<div class="input_field">
						<input type="text" id="ProductTitle" name="product_title" required/>
					</div>

				</div>
				
				<div class="wrapper_label_input">

					<div class="label_aree">
					   <label class="labless">Product's sales price</label><br>
					</div>

					<div class="input_field">
					   <input class="input_date" pattern="^\d*(\.\d{0,2})?$" type="number" id="Product_price" name="sales_price" id="sales" value="0000.000" required><br>
					</div>

				</div> 
				
				<div class="wrapper_label_input">

					<div class="label_aree">
					   <label class="labless">Product's Description</label><br>
				    </div>

					<div class="text_field">
						<textarea name="product_description" id="prod_textare" cols="30" rows="15" style="height: 90px;width: 165px;"></textarea><br>
					</div>

				</div>

				
				<div class="wrapper_label_input">

					<div class="label_aree">
					   <label class="labless">Product's Keywords</label><br>
				    </div>

					<div class="input_field">
						<input type="text" id="Prod_keyword" name="product_keywords" required>
					</div>

				</div>
				
				<div class="wrapper_label_input">

					<div class="label_aree">
						<label class="labless">Product's Features/Uses</label><br>
					</div>

					<div class="text_field">
						<textarea name="product_uses" id="prod_feature" cols="30" rows="15" style="height: 90px;width: 165px;"></textarea><br>
					</div>

				</div>
				<!--  Thread Type -->
				<!-- <div class="wrapper_label_input">

					<div class="label_aree">
						<label class="labless">Product's Thread Type</label><br>
					</div>

					<div class="input_field">
						<input type="text" id="prod_thread" name="product_thread">
					</div>
				</div> -->
				<!-- Product's Status -->
				<!-- <div class="wrapper_label_input">
					
					<div class="label_aree">
						<label class="labless">Product's Status </label><br>
					</div>

					<div class="input_field">
						<label>
							<input type="radio" id="prod_status" name="product_status">
							ON
						</label>
						<label>
							<input type="radio" id="prod_status" name="product_status">
							OFF
						</label>

					</div>
				</div> -->
				<!-- Product's made in -->
				<!-- <div class="wrapper_label_input">
					
					<div class="label_aree">
						<label class="labless">Product's made in</label><br>
					</div>

					<div class="input_field">
						<input type="text" id="prod_made" name="product_made">
					</div>
				</div> -->
				
				<div class="wrapper_label_input">
					<div class="label_aree">
						<label class="labless">Product's Image 1st</label><br>
					</div>

					<div class="input_field">
						<input type="file" id="prod_img1" name="product_img1">
					</div>
				</div>
				
				<div class="wrapper_label_input">
					<div class="label_aree">
						<label class="labless">Product's Image 2nd</label><br>
					</div>

					<div class="input_field">
						<input type="file" id="prod_img2" name="product_img2">
					</div>
				</div>
				
				<div class="wrapper_label_input">
					<div class="label_aree">
						<label class="labless">Product's Image 3rd</label><br>
					</div>
					<div class="input_field">
						<input type="file" id="prod_img3" name="product_img3">
					</div>
				</div>




				<!-- Seasons STarts  -->
			<div class="all_select">
				<div class="selectlabel">
					<label class="labless">Choose Season</label><br>
				</div>

					<div class="wrapper_select_option">
						<select name="product_season" id="prod_select">
						
							<div class="opption_tag">
								<option value="season">choose season</option>
							</div>
							<?php

								$get_season = "SELECT * FROM season";
							    $run_season = mysqli_query($connection, $get_season);

							    while ($row_season = mysqli_fetch_array($run_season)) 
							    {                        // code...

							          $season_id = $row_season['season_id'];
							          $season_name = $row_season['season_name'];
							         
							 		 echo "<option class='panel-list-item' value='$season_id'>$season_name</option>";
							 	}
							               
							?> 
			            </select>
			        </div> 
			</div>

				<!-- all_select div start  -->
				<div class="all_select">
					
						<div class="selectlabel">
							<label class="labless">Product's Cloths types</label><br>
						</div>
						
<!-- wrapper_select_option for Cloth Types category of products  -->
			        <div class="wrapper_select_option">
						<select name="product_cloth_type" id="prod_select">
						
							<div class="opption_tag">
								<option value="Cloths_type">Choose Cloths Type </option>
							</div>

							<?php
									$get_clothtypes = "SELECT * FROM clothtypes";
									$run_clothtypes = mysqli_query($connection, $get_clothtypes);

									while ($row_clothtypes = mysqli_fetch_array($run_clothtypes)) 
									   {                        // code...

									    $clothtype_id = $row_clothtypes['clothtype_id'];
									    $cloth_type = $row_clothtypes['cloth_type'];
											         
					echo "<option class='panel-list-item' value='$clothtype_id'>$cloth_type</option>";               

							      }
							?> 
			            </select>
			        </div>
				</div>

				<div class="input_submit">
					<button id="input_submit_but">
						<input id="but_submit" type="submit" name="product_submit" value="Insert Product">
					</button>
				</div>

		</form>
	</div>	
<a href="../thankyou.php" > Thank you </a>


<script type="text/javascript">
	
	 var currencyInput = document.querySelectorAll( 'input[type="currency"]' );

    for ( var i = 0; i < currencyInput.length; i++ ) {

        var currency = 'INR'/*'GBP' 'USD'*/
        onBlur( {
            target: currencyInput[ i ]
        } )

        currencyInput[ i ].addEventListener( 'focus', onFocus )
        currencyInput[ i ].addEventListener( 'blur', onBlur )

        function localStringToNumber( s ) {
            return Number( String( s ).replace( /[^0-9.-]+/g, "" ) )
        }

        function onFocus( e ) {
            var value = e.target.value;
            e.target.value = value ? localStringToNumber( value ) : ''
        }

        function onBlur( e ) {
            var value = e.target.value

            var options = {
                maximumFractionDigits: 2,
                currency: currency,
                style: "currency",
                currencyDisplay: "symbol"
            }

            e.target.value = ( value || value === 0 ) ?
                localStringToNumber( value ).toLocaleString( undefined, options ) :
                ''
        }
    }
</script>
</body>
</html>

<?php
	
	if(isset($_POST['product_submit']))
	{
				//inputs/text variables

		$product_title = $_REQUEST['product_title'];

		$product_cloth_type = $_REQUEST['product_cloth_type'];

		$product_season = $_REQUEST['product_season'];

		$sales_price = $_REQUEST['sales_price'];

		$product_description = $_REQUEST['product_description'];

		$product_keywords = $_REQUEST['product_keywords'];

		$product_uses = $_REQUEST['product_uses'];
			
		$status = 'on';

		

		//Images variables

		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];
		$product_img3 = $_FILES['product_img3']['name'];

		//Images temprry names

		$temp_name1 = $_FILES['product_img1']['tmp_name'];
		$temp_name2 = $_FILES['product_img2']['tmp_name'];
		$temp_name3 = $_FILES['product_img3']['tmp_name'];
		


if($product_title=='' OR $product_description=='' OR $sales_price=='' OR $product_keywords=='' OR 
	$product_img1=='')
{
	echo "<script> alert('Please fill up remaining fields!!') </script>";
	exit();
}

else {

	//Uploading image into image folder
	move_uploaded_file($temp_name1, "./products_images/$product_img1");
	move_uploaded_file($temp_name2, "./products_images/$product_img2");
	move_uploaded_file($temp_name3, "./products_images/$product_img3");


$insert_products = "INSERT INTO products(clothtype_id, season_id, products_title, product_description,product_price, product_status, product_img1, product_img2, product_img3, product_uses,product_keywords, create_at) VALUES('$product_cloth_type','$product_season',
	'$product_title','$product_description', '$sales_price', '$status','$product_img1',
	'$product_img2','$product_img3','$product_uses','$product_keywords', NOW())";


		$run_productInsertion = mysqli_query($connection, $insert_products);
 
		 if($run_productInsertion)
		 {
            echo "<script> alert('Inserted Sucsefully!!') </script>";
               
         }else {die(mysqli_error($connection));}

	}
}
	
?>
	





<!-- 

/*$product_category1 = $_POST['product_category1'];*/
		/*$product_category2 = $_POST['product_category2'];
		$product_category3 = $_POST['product_category3'];
		$product_category4 = $_POST['product_category4'];*/


<div class="wrapper_select_option">
	<label class="labless">Product's price</label><br>
      <input type="currency" id="Product_price" name="price" currency="USD" required>
      </div>

      <input type="number" min="0" max="10000" step="1" name="Broker_Fees" id="broker_fees" required="required">

   <div class="walkingtext">
    <marquee>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Consectetur ex doloribus iure?<marquee/> 
  </div> 


 -->

 <!-- website link for text editore 
 
 tinymce.com  -->