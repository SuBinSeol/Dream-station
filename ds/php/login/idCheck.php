<?php
    $idd = $_POST['id'];

    $id_check=0;
    include "..\..\db.php";  
    $sql = mq("SELECT * FROM information"); 
    while ($aName1 = $sql->fetch_assoc()){
        if($aName1['id']==$idd){
            echo "이미 존재하는 아이디 입니다.";
            $id_check=1;
        }
    }
    if($id_check==0){
        //$result['success']   = true;
        echo "사용가능한 아이디 입니다.";
    }
    mysqli_close($db);
?>