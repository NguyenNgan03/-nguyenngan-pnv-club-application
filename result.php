<?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        echo "<h1> Thanks you $username !! </h1>" ;
    }
    if(isset($_POST['selectoption'])){
        $selectOption = $_POST['selectoption'];
        echo "<h3> <br> We received your application for the $selectOption </h3>";
    }
    if(isset($_POST['skill'])){
        $skills = $_POST['skill'];
        echo "<br>You are ";
        $lastSkill = end($skills);
        foreach($skills as $skill){
            echo "$skill ";
            if ($skill !== $lastSkill){
                echo " and ";
            }
        }
    }
    if(isset($_POST['time'])){
        $times = $_POST["time"];    
        echo "<br><br> You will be available on ";
        $lastTime = end($times);
        foreach($times as $time){
            echo "$time";
            if($time !== $lastTime){
                echo " and ";
            }
        }
    }
?>