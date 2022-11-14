<?php 

    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('AdminLogin.php','_self')</script>";
    }
    else{

    include_once("../functions/indexFunction.php");
    include_once("../includes/PhpDBConnect.php");
    $form_complete = null; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
     <!-- <link rel="stylesheet" href="./styles/adminRegistaration.css"> -->
     <style>
        .blog_wrapper{margin-bottom: 1em;}
       .row{     display: flex;         }
        .col-10{ float: left; width: 19%; } 
       
         label{
            padding: 12px 12px 12px 0;
            display: inline-block;
            color: slategrey;
        }

        input[type=text]
        {
        padding: 5px;
        border: 1px solid rgb(168, 166, 166);
        border-radius: 4px;
        resize: vertical;
        font-size: 16px;
        /*background-color: blueviolet;*/
        }
        textarea{
            padding: 5px;
            border: 1px solid rgb(168, 166, 166);
            border-radius: 4px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            margin: 10px 0 0 27%;
            border-radius: 4px;
            cursor: pointer;
            float:left;
        }
    </style>
</head>
<body>

	<div class="blog_wrapper">
		<form action="" method="POST" enctype="multipart/form-data">

		<div class="container">

            <div class="row">
                <div class="col-10">
                    <label for="article_title">Article Title:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="article_title" name="article_title" placeholder="Article title.." required/>
                </div>
            </div>

            <div class="row">
                <?php
                    if(isset ($_POST['article_description']) && empty(trim ($_POST['article_description']))){
                     echo "<p class=\'alert\'>Article's Description is required</p>";
                    }
                ?>
                <div class="col-10">
                    <label for="article_descrip">Article Description:</label>
                </div>
                <div class="col-90">
                    <textarea  cols="30" rows="8" id="article_descrip" name="article_description" placeholder="Article Description.." >
                    </textarea> 
                </div>
            </div>

            <div class="row">
                <?php
                    if(isset ($_POST['article_description']) && empty(trim ($_POST['article_content']))){
                     echo "<p class=\'alert\'>Article's Content is required</p>";
                    }
                ?>
                <div class="col-10">
                    <label for="article_content">Article Content:</label>
                </div>
                <div class="col-90">
                    <textarea  cols="30" rows="15" id="article_content" name="article_content" placeholder="Article Content.." >
                    </textarea> 
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="name">Posted By:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="posted_by" name="posted_by">
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="image">Article Image:</label>
                </div>
                <div class="col-90">
                    <input type="file" id="article_img" name="article_img" placeholder="Article Image.." required/>
                </div>
            </div>

            <div class="row">
                <input type="submit" name="postArticle" value="Post" >               
            </div> 


        </div>
			
	   </form>
	</div>
	
</body>
</html>

<?php 
	if(isset($_POST['postArticle'])){

		$article_title = $_POST['article_title'];
		$article_descip = $_POST['article_description'];
		$article_content = $_POST['article_content'];
		$writer_name = $_POST['posted_by'];


		$article_img = $_FILES['article_img']['name'];

        $tmp_article_img = $_FILES['article_img']['tmp_name'];

        $getting_ip_address = get_client_ip();


        $insert_articles = "INSERT INTO articles (article_title, article_description, article_content, posted_by, article_image, article_date) VALUES ('$article_title', '$article_descip', '$article_content', '$writer_name', '$article_img', NOW())";

        $run_article = mysqli_query($connection, $insert_articles);

    move_uploaded_file($tmp_article_img,"./article_images/$article_img");

     if ($run_article){           
            
            // admin_email from input name <-- under session
            echo "<script>alert('Article Created & Posrted Successfully, Thank You..')</script>";
            echo "<script>window.open('viewArticle.php','_self')</script>";
        }



	}

?>

<?php } ?>