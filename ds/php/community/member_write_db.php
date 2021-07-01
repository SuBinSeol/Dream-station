<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>

<?php 
  include "..\..\db.php";
  // session_start();
// Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = mq("SELECT * FROM gold_story");
  $i=1;
  while ($aName1 = $sql->fetch_assoc()){ 
      $i+=1;
  }
  date_default_timezone_set('Asia/Seoul');
  $date=date("Y-m-d H:i:s");
  $n=0;
  $v=0;
  $c=0;
  $var = '<script>var test = "test"; document.write(test);</script>';
  $s_w=$_SESSION['id'];
  //인덱스, 제목, 내용, 날짜, 조회수, 댓글수, 작성자
  $sql="INSERT INTO gold_story (g_index,g_title,g_content,g_date,g_view,g_comment,g_writer)
  VALUES
  ('$i','$_POST[title]','$_POST[content]','$date','$v','$c','$_SESSION[id]')";

  if (!mysqli_query($db,$sql)){
    die('Error: ' . mysqli_error($db));
  }
  $id=$_SESSION['id'];

  $sql="call update_class(".$id.")";

  mysqli_close($db);
    echo "<script language=javascript> alert('게시글이 등록되었습니다.'); location.replace('../../web_page/community/member.php'); </script>";
?>