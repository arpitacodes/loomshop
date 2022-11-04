<?php 
	include_once("./includes/adminDBconnect.php");  

	if(isset($_GET['deleteCustomer'])){

		$customer_id = $_GET['deleteCustomer'];

	$get_customer = "DELETE FROM customers WHERE customer_id = '$customer_id'";

		$run_customer =mysqli_query($connection,$get_customer);

		if($run_customer){
			echo "<script> alert('Customer has been Deleted..!!') </script>";

			 echo "<script>window.open('index.php?viweCustomer','_self') </script>";
		}
	}

?>