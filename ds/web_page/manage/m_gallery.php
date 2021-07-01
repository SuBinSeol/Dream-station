<?php  
  include "../../db.php";

  $sql = mq("SELECT class FROM information WHERE id='$_SESSION[id]'");
  while ($checking = $sql->fetch_assoc()){
    if($checking['class']=='Standard'){
      echo "<script language=javascript> alert('관리자만 이용 가능합니다.'); location.replace('../index/index.php'); </script>";
    }
    if($checking['class']=='Silver'){
        echo "<script language=javascript> alert('관리자만 이용 가능합니다.'); location.replace('../index/index.php'); </script>";
    }
    if($checking['class']=='Gold'){
      echo "<script language=javascript> alert('관리자만 이용 가능합니다.'); location.replace('../index/index.php'); </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery Manager Page</title>
    <link rel="stylesheet" href="../../css/components.css">
    <link rel="stylesheet" href="../../css/icons.css">
    <link rel="stylesheet" href="../../css/responsee.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../../css/lightcase.css">
    <link rel="stylesheet" href="../../css/main1.css">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <link rel="stylesheet" href="../../css/cardlayout.css">
    <meta name="Description" content="">
    <link rel="stylesheet" href="../../base.css" />
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="../../css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-ui.min.js"></script> 
    
    <script>
        function Check(form){
            if (!form.pic.value) {
                alert ('사진이 등록되지 않았습니다. 사진을 등록해주세요.');
                form.pic.focus();
                return;
            }
        form.submit();
        }
    </script>
  </head>

  <script type="text/javascript">
    var user_id = sessionStorage.getItem("mineSession");
    var str;
    function cc(){
        if(sessionStorage.getItem("mineSession")=="-1"){
          str = `<li><a style="color:black;" href="../login/login.html">로그인</a></li>
                <li><a style="color:black;" href="../login/signup.html">회원가입</a></li>`;
        }else{
          str = `<li><a href=""></a>
                    <a style="color:black;" href="#">`+sessionStorage.getItem("mineSession")+`님 환영합니다</a>
                      <ul class="main2">
                        <li><a href="../../php/login/logout.php">로그아웃</a></li>
                      </ul>
                  </li>`;
        }
        $('.loginlog').replaceWith(str);
      }
      function chageSelect(){ 
        var selectValue = document.getElementById("state").options[langSelect.selectedIndex].value; // select element에서 선택된 option의 text가 저장된다. 
        alert(selectValue);
      }
      function aa(){
        $('#s').replaceWith(`<td><select id="state" name="state" onChange="chageSelect()">
                    <option>===(선택해주세요)===</option>
                    <option value="접수완료">접수완료</option>
                    <option value="신청완료">신청완료</option>
                    <option value="제작완료">제작완료</option>
                    <option value="종료">종료</option>
                  </select></td>`);
        $('#s').change(function(){
          alert($(this).val());
          alert($(this).children("option:selected",text()));
        })
        var selectValue = document.getElementById("state").options[langSelect.selectedIndex].value; // select element에서 선택된 option의 text가 저장된다. 
        alert(selectValue);
      }

  </script>
  <body class="size-1280">
    <header role="banner" class="position-absolute">    
      <nav class="background-transparent background-primary-dott full-width sticky">      
        <div class="logo hide-l hide-xl hide-xxl">
           <a href="../index/index.php" class="logo">
            <img class="logo-dark" src="../../img/logo-dark.svg" alt="">
          </a>
        </div>
        <div id="login" style='float: right;'>
          <ul class="main1" style='position: absolute;left: 80%;top: 10%;'>
              <div class="loginlog" id="loginlog"></div>
              <script>cc();</script>
          </ul>
        </div>
        <div class="top-nav"> 
          <div class="top-nav left-menu">
            <ul class="right top-ul chevron">
               <li><a style="color:black;" href="./m_index.php">Home</a></li>
               <li><a style="color:black;" href="./m_member.php">Member</a></li>
               <li><a style="color:black;" href="./m_story.php">Story</a></li>
            </ul>
         </div>
          
          <ul class="logo-menu">
            <a href="./m_index.php" class="logo">
              <img class="logo-white" src="../../img/dream/logo123.PNG" alt="">
              <img class="logo-dark" src="../../img/dream/logo123.PNG" alt="">
            </a>
          </ul>
          
          <div class="top-nav right-menu">
            <ul class="top-ul chevron">
               <li><a style="color:black;" href="./m_gallery.php">Gallery</a></li>
               <li><a style="color:black;" href="./m_equipment.php">Equipment</a></li>
               <li><a style="color:black;" href="./managerpage.php">Request</a></li>
            </ul> 
         </div>
        </div>
      </nav>
    </header>
    
    <main role="main">
      <section class="section background-white">      
        <div class="line text-center">
        </br></br></br>
        <form name="picUpload" method="post" enctype="multipart/form-data"  action="../../php/manage/m_gallery_add.php"> 
        <div class="picPopBox">
            <!--파일첨부시 enctype="multipart/form-data" 꼭선언 그렇지 않으면 파일 전송 안됨-->
            <input type=hidden name="userID">
            <table class="table_row W100P" style="width:500px;">
                <tr><th><h1 class="tit">사진업로드</h1></th></tr>
                <tr>
                    <td>
                      <a style="color:black;">파일을 선택해 주세요 : 　　　　</a>
                      <input type="file" name="pic" accept="image/*" onchange="setThumbnail(event);"/>
                    </td>
                </tr>
            </table>
        </div>
        </br></br>
        <div class="parent">
            <div id="columns">
                <figure>
                    <div id=c></div>
                    <div id="image_container"></div>
                    <figcaption><input id="content" name="content" type="text" style="width:450px"></figcaption>
                </figure>
                <input type="button" value="업로드" onClick="Check(this.form);"  class="btn btn-default"/>
                <input type="button" value="취소" onClick="self.close();"  class="btn btn-default"/>
            </div>
        </div>
    </form>

    <script>
    function setThumbnail(event) {
        var reader = new FileReader();
        reader.onload = function(event) {
            var img = document.createElement("img");
            img.setAttribute("src", event.target.result);
            document.querySelector("div#image_container").appendChild(img);
        };
        reader.readAsDataURL(event.target.files[0]);
    }
    </script>
        </div>
      </section>
    <div class="line">
        <hr class="break margin-top-bottom-0" style="border-color: #777;">
    </div>
      <!-- Section 3 -->
      <section class="section background-white">      
        <div class="line text-center">
          <table border="1">
        </table>
        <h3>업로드한 갤러리 목록</h3>
        <form action="/ds/php/manage/m_gallery_delete.php" method="post"> 
        <table border="1">
            <tr>
                <th>번호</th>
                <th>날짜</th>
                <th>사진미리보기</th>
                <th>사진명</th>
                <th>메모</th>
                <th>편집</th>
            </tr>
            <?php
                $db_conn = mysqli_connect("localhost","root","1234","dream");
                $query = "SELECT * FROM pictures ORDER BY pic_num DESC";
                $stmt = mysqli_prepare($db_conn, $query);
                $exec = mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <input type="hidden" name="pic_num" id="pic_num" value=<?= $row['pic_num'] ?>>
            <input type="hidden" name="pic" id="pic" value=<?= $row['pic'] ?>>
            <tr>
                <td><?= $row['pic_num'] ?></td>
                <td><?= $row['date'] ?></td>
                <td><img src="../../gallery_img/<?php echo $row['pic']?>" style="width:300px;"></td>
                <td><?= $row['pic']?></td>
                <td><?= $row['content'] ?></td>
                <td><input type="submit" value="삭제"  class="btn btn-default"/></td>
            </tr>
            <?php
            } 

                mysqli_free_result($result); 
                mysqli_stmt_close($stmt);
                mysqli_close($db_conn);
            ?>
        </table>
        </form>
        </div>
    </main>
    
    
    <script type="text/javascript" src="../../js/responsee.js"></script>
    <script type="text/javascript" src="../../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../../js/template-scripts.js"></script>
  </body>
   <style>
        #holder,#holder1 { 
            border: 10px dashed #ccc; 
            width: 500px; 
            height: 290px; 
        }
        #holder.hover,#holder1.hover { 
            border: 10px dashed #333; 
        }
    </style>
</html>