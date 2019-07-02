<?php
    echo date('Y-m-d H:i:s')."<br>";
    function print_list(){
        $list = scandir('data');
        $i = 0;
        while($i<count($list)){
            $title = htmlspecialchars($list[$i]);
            if($title == '.' || $title == '..') {
                $i++;
                continue;
            }
            echo "<li><a href=\"index.php?id=$title\">$title</a></li>";
            $i = $i + 1;
        }
    }
    function print_title(){
        if(isset($_GET['id'])){
            $basename = basename($_GET['id']);
            echo htmlspecialchars('data/'.$basename);
        }else{
            echo 'Welcome!';
        }
    }
    function print_description(){
        if(isset($_GET['id'])){
            $basename = basename($_GET['id']);
            echo htmlspecialchars(file_get_contents('data/'.$basename));
        }else{
            echo 'Hello PHP<br>';
            $i = 0;
            while($i < 10){
                echo $i++.'<br>';
            }
        }
    }
?>