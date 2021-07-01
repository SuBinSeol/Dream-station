<?php
    include "..\..\db.php";
    $dataObject = $_POST['dataArr'];
    $sql = mq("update equipment set ava='".$dataObject[1]."' where name='".$dataObject[0]."'");
?>