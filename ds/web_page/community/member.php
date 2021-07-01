<?php  
  include "../../db.php";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MEMBER</title>
    <link rel="stylesheet" href="../../css/components.css">
    <link rel="stylesheet" href="../../css/icons.css">
    <link rel="stylesheet" href="../../css/s_responsee.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../../css/lightcase.css">
    <link rel="stylesheet" href="../../css/main1.css">
    <!-- TABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css"/> 
    <script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
    <!-- CSS 부분 -->

    <!-- JS 부분 -->
    <script type="text/javascript" src="<c:url value='../../js/jquery-1.11.2.js' />"></script>
    <script type="text/javascript" src="<c:url value='../../etc/jquery-ui-1.11.2.custom/jquery-ui.js' />"></script>
    <script type="text/javascript" src="<c:url value='../../etc/DataTables-1.10.4/media/js/jquery.dataTables.js' />"></script>
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
    </script>
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="../../css/s_template-style.css">   
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="../../js/navigation_bar.js"></script>
  </head>

  <script type="text/javascript">
    function logincheck(){
      if(user_id==null||user_id=="-1"){
          alert("로그인 후에 이용하여 주십시오.");
          return false;
      }
      return true;
    }
  </script>
  <body class="size-1280">
    <!-- PREMIUM FEATURES BUTTON -->
    
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-primary-dott full-width sticky">          
        <!-- mobile version logo -->              
        <div class="logo hide-l hide-xl hide-xxl">
           <a href="../index/index.php" class="logo">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="../../img/logo-dark.svg" alt="">
          </a>
        </div>
        <div id="login" style='float: right;'>
          <!-- <ul class="main1" style='position: absolute;left: 1500px;top: 20px; color:red; font-size: 150%;'> -->
          <ul class="main1" style='position: absolute;left: 80%;top: 10%;'>
            <div class="loginlog" id="loginlog"></div>
            <script>cc();</script>
          </ul>
        </div>
        <div class="top-nav"> 

          <!-- left menu items -->
          <!-- left menu items -->
          <div class="top-nav left-menu">
            <ul class="right top-ul chevron">
               <li><a href="../index/index.php">Home</a></li>
               <li><a href="../about-us/about-us.php">About Us</a></li>
               <li><a href="../request/request.php">Request</a></li>
            </ul>
         </div>
          
          <!-- logo -->
          <ul class="logo-menu">
            <a href="../index/index.php" class="logo">
              <!-- Logo White Version -->
              <img class="logo-white" src="../../img/dream/logo123.PNG" alt="">
              <!-- Logo Dark Version -->
              <img class="logo-dark" src="../../img/dream/logo123.PNG" alt="">
            </a>
          </ul>
          
          <!-- right menu items -->
          <div class="top-nav right-menu">
            <ul class="top-ul chevron">
               <li>
                 <a href="#">Community</a>
                 <ul>
                   <li><a href="../community/story.php">Story</a></li>
                   <li><a href="../community/member.php">Member</a></li>
                 </ul>
               </li>
               <li><a href="../gallery/gallery.php">Gallery</a></li>
               <li><a href="../location/location.php">Location</a></li>
            </ul> 
         </div>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(../../img/dream/backg9.png)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Member
          </h1>
          <p class="animated-element text-white">정보 공간</p>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="../../img/arrow-object-white.svg" alt="">
        </header>
      </article>
      <!-- Section 1 -->
      <div class="margin-left-60" style="text-align: center;">
      </br></br>
      <?php
        $sql = mq("SELECT * FROM gold_story");
        $f_index = array();
        $f_title = array();
        $f_content = array();
        $f_date = array();
        $f_view = array();
        $f_writer = array();
        while ($stories = $sql->fetch_assoc()){
          array_push($f_index, $stories['g_index']);
          array_push($f_title, $stories['g_title']);
          array_push($f_content, $stories['g_content']);
          array_push($f_date, $stories['g_date']);
          array_push($f_view, $stories['g_view']);
          array_push($f_writer, $stories['g_writer']);
        }?>
        
      <div class="container">
        <table id="story_table" class="table table-bordered">
            <thead>
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>날짜</th>
                    <th>조회수</th>
                </tr>
            </thead>
            <tbody>
              <script>
                var j_index = <?php echo json_encode($f_index);?>;
                var j_title = <?php echo json_encode($f_title);?>;
                var j_content = <?php echo json_encode($f_content);?>;
                var j_date = <?php echo json_encode($f_date);?>;
                var j_view = <?php echo json_encode($f_view);?>;
                var j_writer = <?php echo json_encode($f_writer);?>;

                for(var i=0; i<j_date.length; i++){
                  document.write('<tr>');
                  document.write('<td>'); document.write(j_index[i]);document.write('</td>');
                  document.write('<td>'); document.write('<a href="member_views.php?data='); document.write(i+1);
                  document.write('" style="color: gray" onclick="return logincheck()">');document.write(j_title[i]); document.write('</a></td>');
                  //document.write('<td>');document.write(j_title[i]);document.write('</td>');
                  document.write('<td>');document.write(j_writer[i]);document.write('</td>');
                  document.write('<td>');document.write(j_date[i]);document.write('</td>');
                  document.write('<td>');document.write(j_view[i]);document.write('</td>');
                  document.write('</tr>');
                }
              </script>
            </tbody>
        </table>
        <a class="btn btn-default pull-left" href="./member_write.php" onclick="return logincheck()">글쓰기</a>
      </div>
    </div>
    <footer>
      <section class="padding-2x background-dark full-width">
        <div class="s-18 l-10">
          <img class="logo-menu" src="img/dream/logo123.PNG" alt="">
          <br>
          <p class="text-size-18">&nbsp&nbsp&nbsp&nbsp 주소 : 부산광역시 부산진구 가야3동 엄광로 176 동의대학교 건윤관(21번 건물)</p>
          <p class="text-size-18">&nbsp&nbsp&nbsp&nbsp 이용시간 : 월 ~ 금 9:00 ~ 17:00</p>
          <p class="text-size-18">&nbsp&nbsp&nbsp&nbsp 이용문의 : 051-890-4375~4376</p>
        </div>
      </section>
    </footer>
    <script type="text/javascript" src="../../js/responsee.js"></script>
    <script type="text/javascript" src="../../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../../js/template-scripts.js"></script> 
  </body>
  <style>
    body{
      padding:0px;
      background-repeat : no-repeat;
      background-size : auto;
      
      line-height:2em;
    }
    .story_table{
      /* 상 우 하 좌*/
      padding:0px 200px 0px 0px;
    }
  </style>
</html>