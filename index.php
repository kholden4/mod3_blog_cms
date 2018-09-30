<!DOCTYPE html>
    <html>
        <head>
            <?php include 'nav.php'?>
        </head><!--close for nav-->

        <body>
            <header>
                <?php include 'header.php'?>
            </header><!--close for header-->

            <?php
                function getPostTitlesFromDatabase() {
                // TODO in Module 4
                // get this data from a database instead of hardcoding it
                $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
                return $postTitles;
                }
            ?>

            <main>
                <h3>Most Recent Blog Posts:</h3>
                <ul class="nav2">
                    <?php 
                        // Call function
                        $postTitles = getPostTitlesFromDatabase();
                        
                        foreach($postTitles as $postTitle) {
                            echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
                        }
                    ?>
                </ul><!--close for list-->
            </main><!--close for main-->
        </body><!--close for body-->

        <footer>
            <?php include 'footer.php'?>
        </footer><!--close for footer-->

    </html>

