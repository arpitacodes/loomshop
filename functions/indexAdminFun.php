<?php 
		/*-----------------------------------********************************************************************************************************************************************************------------------------------------------------
		1. Total Products
		2. Total customer
		3. Total Orders 
		4. Total Sale
		Last 7days

		
		*/





function countProducs(){
		$sqlProd = "SELECT COUNT(*) FROM products";
		$run_sqlProd=mysqli_query($connection,$sqlProd);

		$count_items=mysqli_num_rows($run_sqlProd);
		echo $count_items;
	}



function countCustomers(){
		$countCustomer = "SELECT COUNT(*) FROM customers";
		$run_countCustomer=mysqli_query($connection,$countCustomer);

		$count_coustomer=mysqli_num_rows($run_countCustomer);
		echo $count_coustomer;
	}

?>	