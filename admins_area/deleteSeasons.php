<?php 
	include_once("./includes/adminDBconnect.php");  

	if(isset($_GET['deleteSeasons'])){

		$seasons_id = $_GET['deleteSeasons'];

	$get_seasons = "DELETE FROM season WHERE season_id = '$seasons_id'";

		$run_seasons =mysqli_query($connection,$get_seasons);

		if($run_seasons){
			echo "<script> alert('One Season Name has been Deleted..!!') </script>";

			 echo "<script>window.open('index.php?viweSeasons','_self') </script>";
		}
	}

?>