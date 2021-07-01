<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<?php 
    include "..\..\db.php"; 
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //비밀번호 암호화
    $encrypted_passwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $class = 'Standard';

    // echo $encrypted_passwd;

    $sql="INSERT INTO information (id, pw, name, tel, class) VALUES ('$_POST[id]','$encrypted_passwd','$_POST[name]','$_POST[tel]','$class')";

    if (!mysqli_query($db,$sql)){
        die('Error: ' . mysqli_error($db));
    }
    $sql="INSERT INTO c_count (user_id, class ,count) VALUES ('$_POST[id]','$class', 0)";
    if (!mysqli_query($db,$sql)){
        die('Error: ' . mysqli_error($db));
    }
    mysqli_close($db);
    echo "<script language=javascript> alert('회원가입이 완료되었습니다.'); location.replace('../../web_page/index/index.php'); </script>";
?>
