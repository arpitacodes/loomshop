
<?php
    @session_start();
    include("./includes/PhpDBConnect.php");
   // include("./functions/indexFunction.php"); 
?>
<div class="login_form">
	<form action="checkout.php " method="POST" class="to_cust_login">
     <h2>Login OR Register</h2>
		<label>Enter Your E-mail:</label>
		<input type="e-mail" name="customer_mail" placeholder="Your E-mail"><br>
		<label>Enter Your Password: </label>
		<input type="password" name="mail_password" placeholder="Your Password"><br>
		<p class="regitretion"><a href="custForgetPasswor.php">Forget password</a></p>
		<input type="submit" name="to_login" value="Login">
	</form>

	<p class="regitretion"><a href="custRegistretion.php">Register Now</a></p>
</div>

<style>
	.login_form{
	width: 30%;
    font-size: 18px;
    margin-left: 20rem;
	}

	input[type="submit"] {
    width: 25%;
    border-radius: 3px;
    margin: 0 5rem 0rem 5rem;
	}
input[type="submit"]:hover{color: hsl(353, 100%, 78%);}
.regitretion{
	/*text-align: center;*/
	margin-left: 4.5rem;
    margin-top: 10px;
    margin-bottom: 10px;
	}

input[type='e-mail'], input[type='password']{
	width: 65%;
	border-radius: 2px;
	}

</style>

<?php

	if(isset($_POST['to_login'])){
		$customer_email = $_POST['customer_mail'];
		$customer_password = $_POST['mail_password'];
$select_customer="SELECT * FROM customers WHERE customer_email='$customer_email' AND customer_password = '$customer_password'";
		$run_customer = mysqli_query($connection, $select_customer);

		$check_customer = mysqli_num_rows($run_customer);

		$get_ip_address = get_client_ip();

		$select_cart = "SELECT * FROM cart WHERE ip_address='$get_ip_address'";

		$run_cart = mysqli_query($connection, $select_cart);

		$ckeck_cart = mysqli_num_rows($run_cart);

		if($check_customer==0){

			echo "<script>alert('Password or Email address is not correct, Try again!!!')</script>";
			exit();
		}
		if($check_customer==1 AND $check_cart==0){
			$_SESSION['customer_email'] = $customer_email;

			echo "<script>window.open('customers/myAccount.php','_self')</script>";
		}
		else{
			$_SESSION['customer_email'] = $customer_email;
			//echo "<script>window.open('paymentOption.php','_self')</script>";
			echo "<script>alert('Yor successfully logged in, you can order now!!')</script>";
			//echo "Yor successfully logged in, you can order now!!";
			include("./paymentOption.php");
		}

		
	}

?>

<!-- 
		if(mysqli_num_rows($run_customer)>0){
			$_SESSION['customer_email']=$customer_email;
			echo "<script>window.open('index.php','_self')</script>";
		}
		else
			echo "<script>alert('Your E-mail or Password incorrect, Try again!!')</script>";


 -->