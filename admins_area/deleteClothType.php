<?php 
	include_once("./includes/adminDBconnect.php");  

	if(isset($_GET['deleteClothType'])){

		$cloth_type_id = $_GET['deleteClothType'];

	$delete_cloth_type = "DELETE FROM clothtypes WHERE clothtype_id = '$cloth_type_id'";

		$run_delete_cloth_type =mysqli_query($connection,$delete_cloth_type);

		if($run_delete_cloth_type){
			echo "<script> alert('One Cloths Type has been Deleted..!!') </script>";

			 echo "<script>window.open('index.php?viweCloths','_self') </script>";
		}
	}

?>