<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<style>
	.wrapper{
		margin-left: 10%;
		margin-top: 25px;
	}
	.cust_pass{display: flex;}
	input[type="submit"]{
		width: 10%;
		margin: 1px 5px 3px 5px;
	}

</style>
</head>
<body>

<div class="wrapper">
		
	<form action="" method="POST">

		<h4>Do You Realy wants to Delete Your Account..</h4>

		  <div class="cust_pass" style="margin-top:15px;">
             <input type="submit" name="YES" value="Yes" value="Yes,I want" />  
            <!--  <label>Yes,I want</label>   -->
         <!--  </div> -->

          <!-- <div class="cust_pass" style="margin-top:15px;"> -->                 
              <input type="submit" name="NO" value="No" value="No, I didn't" />           
              <!-- <label>No, I didn't</label> -->
          </div> 

    </form>

</div>

	
</body>
</html>

<?php 
	@session_start();
	include("../includes/PhpDBConnect.php");

	$email = $_SESSION['admin_email'];

	if(isset($_POST['YES'])){
		$delete_admin_acc = "DELETE FROM admins_details WHERE admin_email='$email'";

		$run_delete=mysqli_query($connection,$delete_admin_acc);

		if($run_delete)
		{	
			@session_destroy();
			echo "<script>alert('Your Account has been Deleted...!')</script>";
			echo "<script>window.open('AdminLogin.php','_self')</script>";

		}
	}

	if(isset($_POST['NO'])){
		echo "<script>window.open('index.php','_self')</script>";
	}

?>


