<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<?php 
    include "..\..\db.php"; 
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //비밀번호 암호화
    $encrypted_passwd = password_hash($_POST['newpw'], PASSWORD_DEFAULT);
    // echo $encrypted_passwd;
    $id=$_SESSION['id'];
    $sql="update information set pw='".$encrypted_passwd."' where id='".$id."'";
    // $sql = mq("update information set pw='".$encrypted_passwd."' where id='".$id."'");

    if (!mysqli_query($db,$sql)){
        die('Error: ' . mysqli_error($db));
    }

    mysqli_close($db);
    echo "<script language=javascript> alert('비밀번호가 변경되었습니다.'); location.replace('../../web_page/index/index.php'); </script>";
?>
