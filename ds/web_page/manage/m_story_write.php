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
    <title>Manager Story write</title>
    <link rel="stylesheet" href="../../css/components.css">
    <link rel="stylesheet" href="../../css/icons.css">
    <link rel="stylesheet" href="../../css/s_responsee.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../../css/lightcase.css">
    <link rel="stylesheet" href="../../css/main1.css">
    <!-- TABLE -->
    <!-- SUMMER NOTE -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

    <script src="../../js/summernote/summernote-lite.js"></script>
    <script src="../../js/summernote/lang/summernote-ko-KR.js"></script>
    <link rel="stylesheet" href="../../css/summernote/summernote-lite.css">
    <!-- JS 부분 -->
    <script type="text/javascript" src="<c:url value='../../etc/jquery-ui-1.11.2.custom/jquery-ui.js' />"></script>
    <script>
        jQuery(function($){//DataTables는 HTML의 <table>을 데이터 그리드 형식으로 사용하기 위한 라이브러리
            $("#story_table").DataTable({
              // 표시 건수기능 숨기기
               lengthChange: false,
               // 검색 기능 숨기기 
               //searching: false,
               // 정렬 기능 숨기기
               ordering: false,
               // 정보 표시 숨기기
               info: false,
               // 페이징 기능 숨기기
               //paging: false
            });
        });
        $(document).ready(function() {
       //여기 아래 부분
           $('#summernote').summernote({
              height: 300,                 // 에디터 높이
              minHeight: null,             // 최소 높이
              maxHeight: null,             // 최대 높이
              focus: true,                  // 에디터 로딩후 포커스를 맞출지 여부
              lang: "ko-KR",               // 한글 설정
              placeholder: '최대 2048자까지 쓸 수 있습니다'   //placeholder 설정
          
           });
        });
    </script>  
    <link rel="stylesheet" href="../../css/s_template-style.css">   
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
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
    <section class="section-small-padding background-white text-center" style="text-align: center;">
        
    </section>
    <main role="main">
      <div class="margin-left-60" style="text-align: center;">
      </br></br>
      <div class="container">
      <form method="post" action="../../php/manage/m_story_write_db.php" >
      <table>
            <tr>
                <td><legend style="font-size: 1.5em; line-height:2.5em;">글쓰기</legend></td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="title" name="title" placeholder="제목을 입력해 주세요. "></br>
                </td>
            </tr>
            <tr>
                <td>
                <textarea name="content" id="summernote" class="summernote"></textarea>
                </td>
            </tr>
            <tr>
              <td>
                <input type="file" name="upload_file">
              </td>
            </tr>
            <tr>
                <td>
                    <input type=submit id="check" name="check" value="등록">
                    <input type="button" id="cancel" value="취소" onclick="javascript:location.replace('./m_story.php');"/>
                </td>
            </tr>
        </table>
        </form>
      </div>
    </div>
      
      <section class="section-small-padding background-white text-center" style="text-align: center;">
        
      </section>

    <script type="text/javascript" src="../../js/responsee.js"></script>
    <script type="text/javascript" src="../../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../../js/template-scripts.js"></script>
  </body>
  <style>
    #addpost{
       
    }
    #title{
        text-align: left;
        width : 1000px;
        padding : 8px;
        margin : 2px;
    }
    #story{
        text-align: left;
        width : 1000px;
        height: 350px;
        padding : 8px;
        margin : 2px;
    }
    #check,#cancel{
        width : 100px;
        padding : 9px;
        margin : 4px;
        border:3px;/*버튼테두리 없애기 */
        outline:20px;/*버튼테두리 없애기#D9E5FF #E6E6FA*/
        line-height:1.3em;
    }
    </style>
</html>