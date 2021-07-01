<?php
    include "..\..\db.php"; 

    date_default_timezone_set('Asia/Seoul');
    $name = $_POST['pic_num'];
    echo $name;
    $way = $_POST['pic'];

    $sql = "DELETE FROM pictures where pic_num=".(int)$name;
    $link = array("../../gallery_img","/",$way);
    $result=$link[0].$link[1].$link[2];
    unlink($result);

    if (!mysqli_query($db,$sql)){
    }
    $id=$_SESSION['id'];
    mysqli_close($db);
?>
