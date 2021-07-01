<?php
    include "..\..\db.php";
    $dataObject = $_POST['dataArr'];
    foreach($dataObject as $ma){

        $id=$ma;
        $sql = mq("DELETE FROM information where id='".$id."'");
    }
?>