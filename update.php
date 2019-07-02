<?php
require('view/top.php');
?>
        <a href="create.php">create</a>
        <form action="update_process.php" method="POST">
            <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
            <p><input type="text" name="title" value="<?php print_title();?>"></p>
            <p><textarea name="description"><?php print_description();?></textarea></p>
            <p><input type="submit" value="작성"></p>
        </form>
<?php require('view/bottom.php'); ?>