<?php
    include "..\..\db.php";
    $dataObject = $_POST['dataArr'];
     $sql = "INSERT INTO equipment (name ,amount, ava) VALUES('$dataObject[0]','$dataObject[1]','$dataObject[2]')";
    if (!mysqli_query($db,$sql))
    {
        die('Error: ' . mysqli_error($db));
    }
    echo "<script language=javascript> alert('추가었습니다.'); location.replace('../../web_page/manage/m_equipment.php'); </script>";
?>