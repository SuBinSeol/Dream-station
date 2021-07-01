<?php
    include "..\..\db.php";
    $id=$_SESSION['id'];
    $n=$_POST['name1'];
    date_default_timezone_set('Asia/Seoul');
    $date=date("Y-m-d H:i:s");
    $com_rows = mysqli_num_rows(mysqli_query($db, "SELECT c_index FROM gold_comment where g_index='".$n."'"));
    $com_rows=$com_rows+1;
    $sql="INSERT INTO gold_comment (c_index, g_index, c_writer, c_content, c_date) VALUES ('$com_rows','$n','$id','$_POST[comment]','$date')";
    if (!mysqli_query($db,$sql)){
        die('Error: ' . mysqli_error($db));
    }
    echo "<script language=javascript> alert('등록되었습니다.'); location.replace('../../web_page/community/member_views.php?data=".$n."'); </script>";

?>