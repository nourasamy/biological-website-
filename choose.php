<?php
    $x = $_POST["ch"];
    echo $x;
    if($x=='Insert'){
        header("LOCATION:Post.php");
    }
    else if($x=='Update'){
        header("LOCATION:edit.php");
    }
    else if($x=='Delete'){
        header("LOCATION:delete.php");
    }
    else{
        header("LOCATION:Process.html");
    }
    
?>
