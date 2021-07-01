<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<?php 
    include "..\..\db.php"; 
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $link=$_POST['link'];
    $sql = mq("UPDATE link SET url='".$link."' WHERE category='youtube'");

    mysqli_close($db);
    echo "<script language=javascript> alert('링크가 변경되었습니다.'); location.replace('../../web_page/manage/m_index.php'); </script>";
?>
