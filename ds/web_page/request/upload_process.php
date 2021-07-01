<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>파일 업로드</title>
</head>
<body>
<?php
    include "..\..\db.php";
    $db_conn = mysqli_connect("localhost","root","1234","dream");
    //파일 번호
    $com_rows = mysqli_num_rows(mysqli_query($db, "SELECT * FROM upload_file"));
    $com_rows=$com_rows+1;

    if(isset($_FILES['upfile']) && $_FILES['upfile']['name'] != "") {
        $file = $_FILES['upfile'];
        $upload_directory = '../../data/';
        $ext_str = "hwp,xls,doc,xlsx,docx,pdf,jpg,gif,png,PNG,txt,ppt,pptx,stl,obj";
        $allowed_extensions = explode(',', $ext_str);
        
        $max_file_size = 5242880;
        $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
        
        // 확장자 체크
        if(!in_array($ext, $allowed_extensions)) {
            echo "업로드할 수 없는 확장자 입니다.";
        }
        
        // 파일 크기 체크
        if($file['size'] >= $max_file_size) {
            echo "30MB 까지만 업로드 가능합니다.";
        }
        
        $path = md5(microtime()) . '.' . $ext;
        if(move_uploaded_file($file['tmp_name'], $upload_directory.$path)) {
            $query = "INSERT INTO upload_file (file_num, user_id, file_id, name_orig, name_save, reg_time, equipment, Request, states) VALUES('$com_rows','$_SESSION[id]',?,?,?,now(),'$_POST[equipment]','$_POST[contents]','접수완료')";
            $file_id = md5(uniqid(rand(), true));
            $name_orig = $file['name'];
            $name_save = $path;
            
            $stmt = mysqli_prepare($db_conn, $query);
            $bind = mysqli_stmt_bind_param($stmt, "sss", $file_id, $name_orig, $name_save);
            $exec = mysqli_stmt_execute($stmt);
        
            mysqli_stmt_close($stmt);
            // echo "<script language=javascript> alert('신청이 완료되었습니다.'); location.replace('request.php'); </script>";
            echo "<script language=javascript> alert('신청이 완료되었습니다.'); </script>";
        }
    } else {
        echo "<h3>파일이 업로드 되지 않았습니다.</h3>";
        echo '<a href="javascript:history.go(-1);">이전 페이지</a>';
    }

    mysqli_close($db_conn);
    $id=$_SESSION['id'];
    $sqls = "SELECT count(user_id) AS count FROM upload_file where user_id='".$id."'";
    $sql = mysqli_query($db, $sqls);
    $result = $sql->fetch_array();
    //등급 갱신
    if($result["count"] == 3){
        $sql2="update information set class='Silver' where id='".$id."'";
    
        if (!mysqli_query($db,$sql2)){
            die('Error: ' . mysqli_error($db));
        }else{
            echo "<script>alert('Silver 등급으로 승격하셨습니다.'); </script>";
        }
    }else if($result["count"] == 5){
        $sql2="update information set class='Gold' where id='".$id."'";
        if (!mysqli_query($db,$sql2)){
            die('Error: ' . mysqli_error($db));
        }else{
            echo "<script>alert('Gold 등급으로 승격하셨습니다.'); </script>";
        }
    }

    //프로시저 호출
    // $sql="call update_class(".$id.")";
    // if (!mysqli_query($db,$sql)){
    //     $grade
    //     die('!Error: ' . mysqli_error($db));
    // }
    mysqli_close($db);
    echo "<script language=javascript> location.replace('request.php'); </script>";
?>
</body>
</html>