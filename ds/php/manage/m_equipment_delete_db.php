<?php
    include "..\..\db.php";
    $dataObject = $_POST['dataArr'];
    print_r($dataObject[0]);
    $sql = mq("DELETE FROM equipment where name='".$dataObject[0]."'");
?>