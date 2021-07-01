<?php
    include "..\..\db.php";
    $id = $_POST['id']; 
    // echo $name. "<br>"; 
    $class=$_POST['select_class'];
    // echo $_POST['name1'];
    $sql = mq("update information set class='".$class."' where id='".$id."'");
    $sql = mq("update c_count set class='".$class."' where user_id='".$id."'");
    echo "<script>alert('수정되었습니다.'); location.href='../../web_page/manage/m_member.php';</script>";
?>