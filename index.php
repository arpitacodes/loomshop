<?php
   include("./pages/head.php");
   include("./pages/header.php");
             
?> 



<!-- main Start here -->

  <main>
      
      <!-- products wrapper starting point -->
      <div class="product_wrapper">
          
        <?php
         getProducts(); 
         getSeasonProducts();
         getClothTypeProducts();

        ?>

      </div>
      <!-- products wrapper endding point -->
<h1>All Season fields</h1>
      <?php 
        $select = "SELECT * FROM season";//WHERE season_id = 3

        $result = mysqli_query($connection,$select);

        $rowCount= mysqli_num_rows($result);

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
        <?php 
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
        ?>


    

<a href="./thankyou.php" > Thank you </a>


  </main>

<!-- main ends here -->



<!-- Footer Area -->
<?php 
    include("./pages/footer.php");

?>