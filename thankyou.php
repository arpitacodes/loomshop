 <a href="http://localhost/loomshop/index.php"> go back </a><br>
  <a href="http://localhost/loomshop/admins_area/InsertProduct.php"> go back product's page </a>

   <!-- products wrapper endding point -->
<!-- <h1>All Season fields</h1>
      <?php 

        $select = "SELECT * FROM season";   //WHERE season_id = 3

        $result = mysqli_query($connection, $select);

        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0)
        {
          while($row = mysqli_fetch_assoc($result)){
            echo $row['season_id']. " ".$row['season_name']."<br>";
          }
        }else echo "No results found!!";
      ?>

<h1>Insert VALUES INTO Season Table</h1>
  <div class="seasonForm">
    <form action="index.php" method="POST">
      <div id="field1" style="width: 35%; text-align: center;">
        <input type="number" name="season_id" style=" " placeholder="Season ID"><br>
        <input type="text" name="season_name" style=" " placeholder="Season Name"><br>
        <button style="padding: 3px;"><input type="submit" name="submit" value="Insert"></button>        
      </div>
    </form>
  </div>
        < ? php 
             if (isset($_POST['submit'])) 
            {
                
                $season_id = $_REQUEST['season_id'];
                $season_name = $_REQUEST['season_name'];

            $sql = "INSERT INTO season (season_id,season_name) VALUES ('$season_id','$season_name')";
                $row =mysqli_query($connection, $sql);
                if($row){
               
               echo "Inserted Sucsefully!!";//<script> alert('Inserted Sucsefully!!')</script>
             }
              else {die(mysqli_error($connection));}             
            
                                
          }
        ?> -->


    

<!-- <a href="./thankyou.php" > Thank you </a> -->


  </main>

<!-- main ends here -->



<!-- Footer Area -->
<?php 
    include("./pages/footer.php");

?>

 <style>


  .product_wrapper {
    display: flex;
    flex-wrap: wrap;
    margin-top: 10%;
    margin-left: 4%;
  }

  .single_product{
     flex: 0 1 calc(18% - 1em);
     padding-left: 15px;
     margin-bottom: 2%;
  }

.ProductImage{padding-bottom: 5px;}

.product_head3 {
    width: 10rem;
    height: 15%;
    text-transform: uppercase;
}

.img_a > a, button {
    color: #2a5104;
    font-size: 12px;
    text-transform: uppercase;
  
}
.img_a>a:hover {color: var(--salmon-pink);}
.img_a > a button:hover {color: var(--salmon-pink);}

</style> 


 
<!-- <style>
/*
@media screen and (min-width: 40em) {
    .product_wrapper {
        margin-top: 10%;
        //justify-content: space-between;/
          display: flex;
    }
    
    .single_product {
      ///  -webkit-flex: 0 1  calc(33% - .2em);
            -ms-flex: 0 1  calc(33% - .2em);//
                flex: 0 1  calc(40% - 0em);
        margin-bottom: 2em;
        margin-left: 0;
        margin-right: 0;
    }
}
@media screen and (min-width: 100em) {
    .product_wrapper {
        margin-top: 10%;
        //justify-content: space-between;
          display: flex;
    }
    
    .single_product {
      /// -webkit-flex: 0 1  calc(33% - .2em);
         //   -ms-flex: 0 1  calc(33% - 0em);
                flex: 0 3  calc(10% - 0em);
        margin-bottom: 2em;
        margin-right: 3px;
    }
}*/
</style> -->


/*@media screen and (min-width: 40em) {
    .product_wrapper {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
                flex-wrap: wrap;
        -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
                justify-content: space-between;
        margin-top: -1em;
    }

    .single_product {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex: 0 1 calc(50% - .5em);
            -ms-flex: 0 1 calc(50% - .5em);
                flex: 0 1 calc(50% - .5em);
        margin-bottom: 1em;
    }
}

@media screen and (min-width: 60em) {
    .product_wrapper {
        margin-top: inherit;
    }
    
    .single_product {
        -webkit-flex: 0 1 calc(33% - 1em);
            -ms-flex: 0 1 calc(33% - 1em);
                flex: 0 1 calc(33% - 1em);
        margin-bottom: 2em;
    }
}*/
 /*@media screen and (min-width: 20em) {
    .product_wrapper {
       
        display: flex;
               margin-top: -1em;
    }

    .single_product {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex: 0 1 calc(80% - .2em);
            -ms-flex: 0 1 calc(80% - .2em);
                flex: 0 1 calc(80% - .2em);
        margin-bottom: 1.5em;
        margin-left: 3em;
    }
}*/

