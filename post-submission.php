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
                <div class="main">
                <h2>New Blog Post Submission</h2>
                <form class="post-submissions-form">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Title"></input>

                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" placeholder="Author"></input>

                    <label for="author">Date</label>
                    <input type="date" id="date" name="date" placeholder="Date"></input>
                    <br>
                    <br>
                    <label for="content">Content</label>
                    <textarea name="content" id="content" placeholder="Content"></textarea>
                    <button type="submit" value="Submit">Submit</input>
                </form><!--close for form-->
                </div><!--close for main div--> 
            </main><!--close for main-->
        </body><!--close for body-->

        <footer>
            <?php include 'footer.php'?>
        </footer><!--close for footer-->

    </html>