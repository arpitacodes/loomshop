<style>
	.p_val{
		padding: 5px;
		align-self: center;
	}
	table{
		border: 2px solid #60229d;
	    text-align: center;
	    width: -webkit-fill-available;
	}
	th{
		border-bottom: 2px ridge;
	}
	tr, td {
    border-right: 2px solid #60229d;
    border-top: 2px solid #60229d;
    }
</style>
<main>
	
<table>
	<div class="viwe_wrapper">
		
			<tr>
				<th>S. No.</th>
				<th>ID</th>
				<th>Name</th>
				<th>E-mail</th>
				<th>Image</th>
				<th>Country</th>
				<th>City</th>
				<th>Delete</th>
			</tr>	

<?php 

	 include_once("./includes/adminDBconnect.php"); 

	$get_customer = "SELECT * FROM customers";

	$run_customer =mysqli_query($connection,$get_customer);

	$i=0;
	while($row_customer=mysqli_fetch_array($run_customer)){

	 $customer_id=$row_customer['customer_id'];
	 $customer_name=$row_customer['customer_name'];
	 $customer_mail=$row_customer['customer_email'];
	 $customer_country=$row_customer['customer_country'];
	 $customer_city=$row_customer['customer_city'];
	 $customer_image=$row_customer['customer_Profile_img'];
	      $i++;	
	  
?>

		
	<tr>
		<td class="p_val"><?php echo $i; ?></td>
		<td class="p_val"><?php echo $customer_id; ?></td>
		<td class="p_val"><?php echo $customer_name; ?></td>
		<td class="p_val"><?php echo  $customer_mail; ?></td>
		<td class="p_val">
	<img src="../customers/customer_photos/<?php echo $customer_image; ?>"width="50" height="50">
		 </td>
		 <td class="p_val"><?php echo  $customer_country; ?></td>
		 <td class="p_val"><?php echo  $customer_city; ?></td>
		
		<td class="p_val">
		   <a href="deleteCustomer.php?deleteCustomer=<?php echo $customer_id; ?>">Delete</a>
		</td>
		
	</tr>

		<?php } ?>
		<!-- while closed -->

</div>

</table>
</main>


