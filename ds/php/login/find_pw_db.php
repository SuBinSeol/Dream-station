<?php
    include "..\..\db.php";
    if($_POST["id"] == "" || $_POST["tel"] == ""){
            echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
    }else{

        $userid = $_POST['id'];
        $tel = $_POST['tel'];
        $table ="information";
        $check_query = "SELECT * from ".$table." where id='".$userid."' and tel='".$tel."'";
        $sql = mysqli_query($db, $check_query);
        $result = $sql->fetch_array();

        if($result["id"] == $userid&&$result['tel']==$tel){
            $_POST["test"] = $userid;
			include "../../tests.php";
            echo "<script>location.href='../../web_page/login/new_pw.php';</script>";
        }else{
        echo "<script>alert('없는 계정입니다.'); history.back();</script>";
        }
    }
?>