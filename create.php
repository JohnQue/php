<?php
require('view/top.php');
?>
        <a href="create.php">create</a>
        <form action="create_process.php" method="POST">
            <p><input type="text" name="title" placeholder="Title"></p>
            <p><textarea name="description" placeholder="Description"></textarea></p>
            <p><input type="submit" value="작성"></p>
        </form>
<?php require('view/bottom.php'); ?>