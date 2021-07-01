<?php
    include "../../db.php";
    $name = $_POST['name']; 
    $n=$_POST['name1'];
    $sql = mq("update upload_file set states='".$n."' where file_num='".$name."'");
    echo "<script>alert('수정되었습니다.'); location.href='./managerpage.php';</script>";
?>