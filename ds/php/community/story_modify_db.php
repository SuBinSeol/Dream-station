<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>

<?php 
  include "..\..\db.php";
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = mq("SELECT * FROM silver_story");
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
  $index=$_POST['s_index'];
  $title=$_POST['title'];


  $sql="INSERT INTO silver_story (s_index,s_title,s_content,s_date,s_view,s_comment,s_writer)
  VALUES
  ('$i','$_POST[title]','$_POST[content]','$date','$v','$c','$_SESSION[id]')";

  $sql="UPDATE silver_story SET filedA='456', fieldB='ABC' WHERE s_index='$index';";
  
  

  if (!mysqli_query($db,$sql)){
    die('Error: ' . mysqli_error($db));
  }
  $id=$_SESSION['id'];

  $sql="call update_class(".$id.")";
  mysqli_close($db);
    echo "<script language=javascript> alert('게시글이 등록되었습니다.'); location.replace('../../web_page/community/story.php'); </script>";
?>