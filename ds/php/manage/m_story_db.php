<?php
    include "..\..\db.php"; 
    $dataObject = $_POST['dataArr'];
    $f = $_POST['dataArr'][0];
    foreach($dataObject as $ma){
        $sql = "DELETE FROM silver_story where s_index=".(int)$ma;
        if (!mysqli_query($db,$sql))
        {
            die('Error: ' . mysqli_error($db));
        }
    }
    $i=(int)$f;
    echo "$%".$i.'<br>';
    $query = "SELECT * FROM silver_story ORDER BY s_index ASC";
    $stmt = mysqli_prepare($db, $query);
    $exec = mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while($row = mysqli_fetch_assoc($result)) {
      $num = $row['s_index'];
      echo $num."  ";
      $s_date = $row['s_date'];
      if((int)$num > (int)$f){
        echo $i."!!!";
        $sql="UPDATE story set s_index='".$i."' where s_index='".$num."'";
        if (!mysqli_query($db,$sql))
        {
          die('Error: ' . mysqli_error($db));
        }
        $i++;
      }
    }
    echo "<script language=javascript> alert('삭제었습니다.'); location.replace('../../web_page/manage/m_story.php'); </script>";
?>