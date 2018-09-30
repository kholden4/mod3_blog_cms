<!DOCTYPE html>
  <html>
      <head>
        <?php include 'nav.php'?>
      </head><!--close for nav-->

      <body>
          <header>
            <?php include 'header.php'?>
          </header><!--close for header-->

          <main>
              <?php
                function getPostDetailsFromDatabase() {
                    // TODO in Module 4
                    // get this data from a database instead of hardcoding it
                    $postDetails = array('title' => 'Blog Post 1', 
                                        'date' => 'September 6, 2018',
                                        'author' => 'Kristy Holden',
                                        'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis ornare metus, a mattis velit. Nunc libero massa, luctus nec pellentesque ut, feugiat in lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus urna leo, lacinia sed leo auctor, fermentum viverra nisl. Quisque sed nisl dolor. Sed gravida imperdiet luctus. Suspendisse diam ipsum, mattis sed viverra eget, pharetra et arcu. Donec viverra, tortor at tincidunt pharetra, odio justo cursus sem, sit amet vestibulum velit arcu et dolor. Aenean vel velit vestibulum, vulputate nibh in, vestibulum mauris.</p>'
                                        );
                    return $postDetails;
                    }
                
                    // Post details contains all the data to generate the blog from
                    $postDetails = getPostDetailsFromDatabase();
              ?>

                <h2 class="post-title"><?php echo $postDetails["title"]; ?></h2>
                <div class="post-date"><?php echo $postDetails["date"]; ?></div>
                <div class="post-author"><?php echo $postDetails["author"]; ?></div>
                <div class="post-content"><?php echo $postDetails["content"]; ?></div>
             
          </main><!--close for main-->
      </body><!--close for body-->

      <footer>
        <?php include 'footer.php'?>
      </footer><!--close for footer-->

</html>
            