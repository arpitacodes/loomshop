<?php
  
   include("./pages/head.php");
   include("./pages/header.php");
        
?> 

 <main class="main-area">
        
        <div class="centered">

            <section class="cards">
<?php 
    
        
      
 $get_articles = "SELECT * FROM articles ORDER BY article_id DESC ";
 $runs_article = mysqli_query($connection, $get_articles);
          
            while($row_article = mysqli_fetch_array($runs_article)) 
            {

              $article_id = $row_article['article_id'];
              $article_title = $row_article['article_title'];
              $article_description = $row_article['article_description'];
              $article_content = $row_article['article_content'];
              $posted_by = $row_article['posted_by'];
              $article_image = $row_article['article_image'];
              $posted_by = $row_article['posted_by'];
              $date = $row_article['article_date'];




           echo "
                <article class='card'>
                    <a href='#singleArticle.php'>
                        <figure class='thumbnail'>
                          <img class='ProductImage' src='./admins_area/article_images/$article_image' width='300' height='180' />
                        </figure>
                        <div class='card-content'>
                            <h2>$article_title</h2>
                            <p>$article_description</p><br><br>
                            <p>$article_content</p>
                            <p>$posted_by</p>
                            <p>$date</p>
                            <a href='allBlog.php' class='read_more'>Read less</a>

                        </div>
                    </a>
                </article>";

          }
 ?>
        
            </section><!-- .cards -->
           
        </div><!-- .centered -->
        
    </main>