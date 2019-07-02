<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>function</title>
    </head>
    <body>
        <h1>function</h1>
        <?php
        $str = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum harum ratione delectus minima qui.
        
        consequuntur non ex ipsam officia, sunt quibusdam incidunt, doloribus vitae laborum cum quod. Dolor, adipisci corporis.';
        echo $str;
        ?>
        <h2>strlen()</h2>
        <?php
            echo strlen($str);
        ?>
        <h2>nl2br</h2>
        <?php
            echo nl2br($str);
        ?>
    </body>
</html>