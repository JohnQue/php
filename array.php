<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <h1>Array</h1>
        <?php
            $coworkers = array('egoing', 'sssi', 'eekleke');
            $i = 0;
            while($i < count($coworkers)){
                echo $coworkers[$i++].'<br>';
            }
            var_dump($coworkers);
            array_push($coworkers, 'ukekekz');
            var_dump($coworkers);
        ?>
    </body>
</html>