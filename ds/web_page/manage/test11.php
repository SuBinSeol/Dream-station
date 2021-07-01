<?php
    include "../../db.php";
    $name = $_GET['data']; 
    $check_query = "SELECT name_save from upload_file where file_num=".(int)$name;
    $sql = mysqli_query($db, $check_query);
    $result = $sql->fetch_array();
    unlink("../../data/".$result["name_save"]);

    $sql = "DELETE FROM upload_file where file_num=".(int)$name;
    if (!mysqli_query($db,$sql))
    {
      die('Error: ' . mysqli_error($db));
    }
    $i=(int)$name;
    $query = "SELECT * FROM upload_file ORDER BY file_num ASC";
    $stmt = mysqli_prepare($db, $query);
    $exec = mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while($row = mysqli_fetch_assoc($result)) {
      $num = $row['file_num'];
      $file_id = $row['file_id'];
      if((int)$num > (int)$name){
        $sql="UPDATE upload_file set file_num='".$i."' where file_id='".$file_id."'";
        if (!mysqli_query($db,$sql))
        {
          die('Error: ' . mysqli_error($db));
        }
        $i++;
      }
    }
    echo "<script>alert('삭제되었습니다.'); location.href='./managerpage.php';</script>";
?>