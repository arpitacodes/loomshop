<?php 
$dbConn= mysqli_connect("localhost","root","","loomshop");


$result= mysqli_query($dbConn,"SELECT * FROM brands");

if (mysqli_num_rows($result) > 0) {

	
	
} else "<h3>Our database is not working</h3>"




?>


<!-- /*

if(!$dbConn)
	{
		die("Connection failed:" .mysqli_connect_error());
	}


$brands = "CREATE TABLE IF NOT EXISTS brands (
	brand_id int not null auto_increment primary key,
	brand_title varchar(70) not null
	);

	$stmt = $dbConn->query($brands);

	if (isset($_POST['submit'])) {

	$createBrand = "insert into brands values()";

		$brand_title = $_POST['brand_title'];

		$brandRow = "INSERT INTO brands(brand_title) VALUES('$brand_title')";

		$row = $dbConn->query($brandRow);

	}

	$showBrands = $dbConn->query("select * from brands");


	$rows = $showBrands->fetchAll();

	foreach ($rows as $row) {
		echo "<br><b>Brand Title:</b> ", $row['brand_title']"; -->

<!-- ?> -->

<!-- <br><br>
<br><br>
 <a href="brands.php">Crate Bramd</a>

*/ -->