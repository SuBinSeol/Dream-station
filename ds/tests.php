<?php
    // session_start();
    $test = $_POST["test"];
    if($test == "-1"){
        // session_start();
        $_SESSION['id']="-1";
    }else{
        $_SESSION['id'] = $test;
    }

?>