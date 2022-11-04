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
				<th>Order No.</th>
				<th>Customer e-mail</th>
				<th>Invoice No.</th>
				<th>Product ID</th>
				<th>Quantity</th>
				<th>Status</th>
				<th>Delete</th>
			</tr>	

<?php 

	 include_once("./includes/adminDBconnect.php"); 

	$get_orders = "SELECT * FROM customer_order";

	$run_orders =mysqli_query($connection,$get_orders);

	$i=0;
	while($row_orders=mysqli_fetch_array($run_orders)){

	 $customer_id=$row_orders['customer_id'];	
	 $order_id=$row_orders['pending_order_id'];
	 $invoice_no=$row_orders['invoice_no'];
	 $product_id=$row_orders['product_id'];
	 $product_qut=$row_orders['quantity'];
	 $order_status=$row_orders['order_status'];
	      $i++;	
	  
?>

		
	<tr>
		<td class="p_val"><?php echo $i; ?></td>
		<td class="p_val"></td>
		<td class="p_val"><?php echo $invoice_no; ?></td>
		<td class="p_val"><?php echo  $product_id; ?></td>
		<td class="p_val"><?php echo  $product_qut; ?></td>		
		<td class="p_val">
		 <?php 

		    if($order_status=='Pending')
		    	{
		    		echo $order_status='Pending';
		    	}
		    else
		    {
		    	echo $order_status='Complete';
		    }

		 ?>
		 	
		</td>
		<td class="p_val">
		   <a href="deleteCustomer.php?deleteCustomer=<?php echo $customer_id; ?>">Delete</a>
		</td>
		
	</tr>

		<?php } ?>
		<!-- while closed -->

</div>

</table>
</main>


