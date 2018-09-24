<?php
    include 'nav.php';
    include 'header.php';
?>

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
        </div><!--close for main-->

    </body><!--close for body-->

<?php
    include 'footer.php';
?>