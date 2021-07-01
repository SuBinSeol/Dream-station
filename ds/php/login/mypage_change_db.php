<?php
    include "..\..\db.php";

    if($_POST['password']==""){
        $sql = mq("update information set name='".$_POST['name']."',tel='".$_POST['tel']."' where id='".$_SESSION['id']."'");
    }else{
        $encrypted_passwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = mq("update information set pw='".$encrypted_passwd."',name='".$_POST['name']."',tel='".$_POST['tel']."' where id='".$_SESSION['id']."'");
    }
    mysqli_close($db);
    echo "<script>alert('수정되었습니다.'); location.href='../../web_page/login/mypage.php';</script>";
?>