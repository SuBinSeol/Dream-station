<?php
    include "..\..\db.php";
    if($_POST["name"] == "" || $_POST["tel"] == ""){
            echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
    }else{

        $username = $_POST['name'];
        $tel = $_POST['tel'];
        $table ="information";
        $check_query = "SELECT * from ".$table." where name='".$username."' and tel='".$tel."'";
        $sql = mysqli_query($db, $check_query);
        $result = $sql->fetch_array();

        if($result["name"] == $username){
            echo "<script>alert('회원님의 ID는 ".$result['id']."입니다.'); location.href='../../web_page/login/login.html';</script>";
        }else{
        echo "<script>alert('없는 계정입니다.'); history.back();</script>";
        }
    }
?>