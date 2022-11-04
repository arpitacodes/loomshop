<?php
@session_start();
include("./includes/PhpDBConnect.php");
include("./functions/indexFunction.php"); 

if(isset($_GET['c_id'])){
	$customer_id = $_GET['c_id'];
}
		

	$ip_address = get_client_ip();

    (float)$totalprice=0;

    $sel_price = "SELECT * FROM cart WHERE ip_address ='$ip_address'";

    $run_price = mysqli_query($connection,$sel_price);

    $status= 'Pending';

    $invoice_no = mt_rand(1,100000);

    $count_product = mysqli_num_rows($run_price);


    while($run_record = mysqli_fetch_array($run_price)){

      $product_id = $run_record['p_id'];

      $prod_price = "SELECT * FROM products WHERE products_id='$product_id'";

      $run_product_price = mysqli_query($connection,$prod_price);

      while($pro_price=mysqli_fetch_array($run_product_price)){

        $product_price=array($pro_price['product_price']); 

        $values=array_sum($product_price);

        (float)$totalprice +=  (float)$values;

      }
    }

//To Getting Quantity

    $get_cart = "SELECT * FROM cart WHERE ip_address = '$ip_address'";
    
    $run_cart = mysqli_query($connection,$get_cart);

    $get_qty = mysqli_fetch_array($run_cart);

    $qty = $get_qty['quantity'];

    if($qty==0){

    	$qty=1;
    	$sub_total =  (float)$totalprice;

    }
    else{
      
    	$qty = $qty;
    	$sub_total =  (float)$totalprice *  (int)$qty;
    }

     $insert_orders = "INSERT INTO customer_orders(customer_id,due_amount,invoice_no,total_products,order_date,order_status)VALUES('$customer_id','$sub_total','$invoice_no', '$count_product', NOW(), '$status')";

    $run_order = mysqli_query($connection, $insert_orders);

   
    	echo "<script>alert('Order Successfully Submited, Thanks!!')</script>";
    	echo "<script>window.open('./customers/myAccount.php','_self')</script>";

      $insert_to_pending_orders = "INSERT INTO pending_order (customer_id, invoice_no,product_id, quantity, order_status)VALUES('$customer_id','$invoice_no','$product_id', '$qty', '$status')";

      $run_pending_orders =mysqli_query($connection,$insert_to_pending_orders);

    	$emplty_cart = "DELETE FROM cart WHERE ip_address='$ip_address'";

    	$run_empty = mysqli_query($connection, $emplty_cart);


?>