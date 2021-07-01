<?php
    include "..\..\db.php";  

    error_reporting(E_ALL);


    //파일이 임시파일폴더에 업로드 되었는지를 체크

    if(!is_uploaded_file($_FILES['pic']['tmp_name'])){

        echo <<< _DIV_
        <div class="file_err_text">파일이 업로드 되지 않았습니다. 확인후 다시 업로드 하세요.</div>
        <div class="btnZone">
        <input type="button" value="확인" onClick="history:go(-1);" class="btnOk btnSmall"/></div>
        _DIV_;
        exit; //자바스크립트의 return과 비슷한의미

    }

    //동일이름 파일 존재여부체크
    /*if(같은 이름을 가진 파일이 있으면){
    이름바꾸는것이 어때?
    뒤로
    종료
    }*/
    if(file_exists('../../gallery_img/' . $_FILES['pic']['name'])){

        echo <<< _DIV3_
        <div class="file_err_text">동일한 이름을 가진 파일이 있습니다. 다른 파일명으로 올려주세요.</div>
        <div class="btnZone">
        <input type="button" value="확인" onClick="history:go(-1);" class="btnOk btnSmall"/></div>
        _DIV3_;
        exit;

    }   
    //파일을 임시파일폴더에서 사용자서버 폴더로 복사해서 업로드함
    //만약 업로드가 되지 않았다면 (임시폴더의 파일을 pics폴더에 사용자가 지정한 이름으로 업로드) 
    if (!move_uploaded_file($_FILES['pic']['tmp_name'], "../../gallery_img/". $_FILES['pic']['name'])){

        echo <<< _DIV2_
        <div class="file_err_text">사진을 복사하지 못했습니다. 관리자에게 문의하세요.</div>
        <div class="btnZone">
        <input type="button" value="확인" onClick="history:go(-1);" class="btnOk btnSmall"/></div>
        _DIV2_;
        exit; //돌아감

    }

    //$link = mysqli_connect('localhost','아이디','패스워드','DB명') or die('DB 접속오류');
    //$userID = $_COOKIE['userID']; //userID는 쿠기값사용 login.php
    //$up_date = date('Y-m-d H:i:s');//현재 등록한 날짜시간 년-월-일 시분초 
    date_default_timezone_set('Asia/Seoul');
    $date=date("Y-m-d H:i:s");
    $content = $_POST['content'];
    $pic = $_FILES['pic']['name']; //파일

    $sql="INSERT INTO pictures (date, pic, content)
    VALUES
    ('$date', '$pic', '$content')";

    if (!mysqli_query($db,$sql)){
        die('Error: ' . mysqli_error($db));
    }
    $id=$_SESSION['id'];
    $sql="call update_class(".$id.")";
    if (!mysqli_query($db,$sql)){
      die('!Error: ' . mysqli_error($db));
    }
    mysqli_close($db);
        echo "<script language=javascript> alert('사진이 업로드 되었습니다..'); location.replace('../../web_page/gallery/gallery.php'); </script>";
?>

