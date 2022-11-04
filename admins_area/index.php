<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="#..Viwe Products /styles/index.css">
	<link rel="stylesheet" href="styles/main_admin.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <style>
  	details {
    border: 1px solid #aaa;
    border-radius: 4px;
    padding: .5em .5em 0;
    margin: 3px;
    margin-left: 15px;
   }

summary {
    font-weight: bold;
    margin: -.5em -.5em 0;
    padding: .3em;
}

details[open] {
    padding: .3em;
}

details[open] summary {
    border-bottom: 1px solid #aaa;
    margin-bottom: .5em;
}

.addNew > a{  padding: 10px;   margin:  10px ; }
.viwe > a{ padding: 10px; margin: 10px ; }


li.menu_title {
    padding: 7px;
    margin-left: 11px;
    }
  </style>
</head>
<body>
	
	<header>
		<div class="admin_wrapper" >
			<h3>Admin Panel</h3>
	          <a href="index.php?viwePayment" class="user_ank">
	          	<i class="fas fa-user"></i>
	          </a>
		</div>	
	</header>

<main>

  <div class="side_wrapper" style="height: 35rem;">

	<div class="left_wrapper" style="width: 20%;">

	   <h3 style="text-align: center;">Manage contect</h3>
		<div class="detailsAdmin" style="width: 75%">
		<details>
	    	<summary>Add New</summary>
	    		<p class="addNew">
			  		<li>
			  			<a href="index.php?insertClothType" class="p_ank">Cloth's Type
			  		    </a>
			  		</li>
			  		
			  		<li><a href="index.php?insertSeason" class="p_ank">Season</a>
			  		</li>
			  		<li><a href="index.php?InsertProduct" class="p_ank">Product</a>
			  		</li>
			  	</p>
			  	
		</details>
		
		<details>

		   <summary>viwe</summary>
			
				<p class="viwe"> 
					<li><a href="index.php?viweCloths" class="p_ank">Cloth's Type</a>
					</li>
					<li><a href="index.php?viweSeasons" class="p_ank">Seasons</a>
					</li>
					<li><a href="index.php?viweProducts" class="p_ank">Products </a>
					</li>
					<li><a href="index.php?viweCustomer" class="p_ank">Customers</a>
					</li>
					<li><a href="index.php?viweOrders" class="p_ank">Orders</a>
					</li>
					<li><a href="index.php?viwePayment" class="p_ank">Payment</a>
					</li>
					</p>
		</details>


			<li class="menu_title">
			   <a href="index.php?adminLogout">Admin Logout</a>
			</li>

	   </div>

			
	</div>

		<div class="right_wrapper" style="width:76%;">

			<?php 
				include ("./includes/adminDBconnect.php");

				$sql = "SELECT COUNT(*) FROM products";


				if(isset($_GET['viweProducts'])){
					include("viweProducts.php");
				}

					if(isset($_GET['InsertProduct'])){
						include("InsertProduct.php");
					}

	                if(isset($_GET['editProduct'])){
						include("editProduct.php");
					}


				if(isset($_GET['insertClothType'])){
					include("insertClothType.php");
				}

					if(isset($_GET['viweCloths'])){
						include("viweCloths.php");
				    }
					if(isset($_GET['editClothType'])){
					  include("editClothType.php");
				    }



			if(isset($_GET['insertSeason'])){
					include("insertSeason.php");
			}

				if(isset($_GET['viweSeasons'])){
					include("viweSeasons.php");
				}

				if(isset($_GET['editSeasons'])){
					include("editSeasons.php");
				}

			
			if(isset($_GET['viweCustomer'])){
					include("viweCustomer.php");
				}	


			if(isset($_GET['viweOrders'])){
				include("viweOrders.php");
			}
				
		/*	if(isset($_GET['viwePayment'])){
				include("viwePayment.php");
			}*/
				
			?>

		</div>
		</div>
	</main>


</body>
</html>
