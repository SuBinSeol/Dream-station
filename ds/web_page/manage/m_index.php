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
    <title>Home Manager Page</title>
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
    <script type="text/javascript" src="../../sjs/jquery-ui.min.js"></script> 
    
    <script>
        function Check(form){
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
           <a href="index.html" class="logo">
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
            <a href="m_index.php" class="logo">
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
      </br></br>
      <section class="section-small-padding background-white text-center">      
        <div class="line text-center" style="text-align:center;">
        </br></br></br>
        <fieldset>
        <legend>구글 폼 정보</legend>
        <form name="join" method="post" action="../../php/manage/m_google_link.php">
            <div class="picPopBox" >
                구글 폼 링크 변경 :
                <input type="text" name="link" id="link" style="width:30%;"></input>
                <input type="submit" value="확인"class="btn btn-default"/>
            </div>
        </form>
        </fieldset>
        </br></br>
        <fieldset>
        <legend>유튜브 정보</legend>
        <form name="join" method="post" action="../../php/manage/m_index_link.php">
            <div class="picPopBox" >
                유튜브 링크 변경 :
                <input type="text" name="link" id="link" style="width:30%;"></input>
                <input type="submit" value="확인"class="btn btn-default"/>
            </div>
        </form>
        </fieldset>
        </br></br>
        <p align="middle">
        <img src="../../img/dream/explain.png" style="width:60%; text-align:center;"/>
        </p>
        </div>
        
      </section>
      <section class="section background-white">      
        <div class="line text-center">
        </div>
      </section>
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