<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		form{
			margin: 10%;
		}
		label{margin: 0 15px 0 0;font-weight: bold;
			font-size: 16px;		}
		input[type="text"]{
			margin: 10px;
			font-weight: bold;
			font-size: 16px;
		}
		input[type="submit"]{ padding: 5px; border-radius: 5px; }
	</style>

</head>
<body>
	<center>
	<form action="" method="POST">
			
		<div class="season_wrapper">
			<label>Season Name<b> : </b> </label>
			<input type="text" name="seasons_name" placeholder="New Season Name..">
			<br>
			<input type="submit" name="addNewSeasonName" value="Insert Season ">
			<br>

		</div>

	</form>
	</center>
	

	<?php 
		include("includes/adminDBconnect.php");

		if(isset($_POST['addNewSeasonName'])){

			$season_title=$_POST['seasons_name'];

			$insert_new_season="INSERT INTO season (season_name) VALUES ('$season_title')";

			$run_new_season=mysqli_query($connection,$insert_new_season);

			if($run_new_season){
				echo "<script> alert('New Season Name has been Inserted..! ') </script>";
			}
		}
	?>
</body>
</html>