<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Payment</title>
	<style>
	.payment_wrapper{
	padding: 20px;
    width: 100%;
    text-align: center;
    /*background: #5f9ea057;*/
    border-radius: 7px;
    font-size: 18px;
	}

	.payment_wrapper>b, a{
		display: inline-block;
	}
	.payment_wrapper img:hover{
		box-shadow: 0 5px 4px #123;
		/*6px 8px 8px #2b5f93;*/
	}
button:hover{ border-bottom: 1px solid var(--cultured); }
</style>
</head>
<body>
	
	 <?php 
 		include("./includes/PhpDBConnect.php");
 		//include("./functions/indexFunction.php"); 

	?>
<div class="payment_wrapper">
	
	<h2>Payment Option for You!!</h2><br>

		 <?php 
			$ip_address = get_client_ip();

			$get_customer = "SELECT * FROM customers WHERE customer_ip_address = '$ip_address' ";

			$run_customer = mysqli_query($connection, $get_customer);

			$customer = mysqli_fetch_array($run_customer);

			$customer_id = $customer['customer_id'];

		?>

	<b>Pay with</b> &nbsp; <a href="https://www.paypal.com"><img src="./images/paypal.PNG" alt="PayPal Image"></a> &nbsp; <b>or <a href= "customerOrder.php?c_id= <?php echo $customer_id;?>">Pay Offline</a></b><br><br>
	<b>If you selected, with offline payment, then please check your email account to get the invoice number!!</b>
	<br>
</div>

</body>
</html>
