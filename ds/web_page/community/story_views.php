<?php  
  include "..\..\db.php";

  $sql = mq("SELECT class FROM information WHERE id='$_SESSION[id]'");
  while ($checking = $sql->fetch_assoc()){
    if($checking['class']=='Standard'){
      echo "<script language=javascript> alert('Silver 등급부터 이용 가능합니다.'); location.replace('story.php'); </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STORY</title>
    <link rel="stylesheet" href="../../css/components.css">
    <link rel="stylesheet" href="../../css/icons.css">
    <link rel="stylesheet" href="../../css/s_responsee.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../../css/lightcase.css">
    <link rel="stylesheet" href="../../css/main1.css">
    <link rel="stylesheet" href="../../css/story.css">
    <!-- TABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css"/> 
    <script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
    <!-- CSS 부분 -->

    <!-- JS 부분 -->
    <script type="text/javascript" src="<c:url value='/js/jquery-1.11.2.js' />"></script>
    <script type="text/javascript" src="<c:url value='/etc/jquery-ui-1.11.2.custom/jquery-ui.js' />"></script>
    <script type="text/javascript" src="<c:url value='/etc/DataTables-1.10.4/media/js/jquery.dataTables.js' />"></script>
    <script type="text/javascript" src="../../js/navigation_bar.js"></script>

    <script>
        jQuery(function($){//DataTables는 HTML의 <table>을 데이터 그리드 형식으로 사용하기 위한 라이브러리
            $("#story_table").DataTable({
              // 표시 건수기능 숨기기
               lengthChange: false,
               // 검색 기능 숨기기
               searching: false,
               // 정렬 기능 숨기기
               ordering: false,
               // 정보 표시 숨기기
               info: false,
               // 페이징 기능 숨기기
               paging: false
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
    var s_index=0;
      function test(a){
        // alert(a);
        s_index=a;
        // $('#name1').val(a);
        // alert($("#name1").val());
      }
      function return_s(){
        $('#name1').val(s_index);
        // alert($("#name1").val());
      }
  </script>
  <body class="size-1280">
    <!-- PREMIUM FEATURES BUTTON -->
     <!-- <a target="_blank" class="hide-s" href="../template/virtua-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a> -->
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
               <li><a href="index.php">Home</a></li>
               <li><a href="about-us.php">About Us</a></li>
               <li><a href="contact.php">Request</a></li>
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
                   <li><a href="story.php">Story</a></li>
                   <li><a href="member.php">Member</a></li>
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
        <header class="section background-image text-center" style="background-image:url(../../img/dream/story1.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Story
          </h1>
          <p class="animated-element text-white">이야기 공간</p>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="../../img/arrow-object-white.svg" alt="">
        </header>
      </article>
      <!-- Section 1 -->
      <div class="margin-left-60" style="text-align: center;">
        </br></br>  
        <div class="container">
          <?php
            // $val=valint("<script> document.write(temp); </script>");
            // echo $val;
            // echo $val; {$_GET['data']}
            //echo gettype($val);
            $sql11 = mq("SELECT * FROM silver_story where s_index='{$_GET['data']}'");
            // echo($_GET['data']);
            $i=0;
            //$com0_rows = mysqli_num_rows(mysqli_query($db, "SELECT * FROM comment where post_num='".$_GET['data']."'"));
            while($story = $sql11->fetch_array()){
              $int_v=(int)$story['s_view'];
              $int_v+=1;
              $sql2=mq("update silver_story set s_view='".$int_v."' where s_index='".$story['s_index']."'");
              //$sql21=mq("update post set comments='".$com0_rows."' where no='".$_GET['data']."'");
              $writer= $story['s_writer'];
              $n=$story['s_index'];
              echo "<script>test(".$story['s_index'].");</script>";
              if($writer==$_SESSION['id']){
                echo '<a class="btn btn-default pull-right" href="story_modify.php?index='.$n.'">수정</a>';
              }
          ?>
          <a class="btn btn-default pull-right" href="story.php">목록</a></br></br>
          <table border="0" id="post_view">
            <thead>
              <tr>
                <th class='line'>제목 : <?php echo $story['s_title']; ?></th>
                <td class='line' style="text-align: right"><?php echo $story['s_date']; ?></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class='line1'>작성자 : <?php echo $story['s_writer']; ?></th>
                <td class='line1' style="text-align: right">조회수 : <?php echo $story['s_view']; ?>
                <!--댓글 : <?php //echo $post['comments']; ?></td>-->
              </tr>
              <tr class='list'>
                <th class='line1'><?php echo $story['s_content']; ?></th>
                <td class='line1'>
                <!-- <input type="text" name="aff" id="aff" value=""/> -->
                </td>
              </tr>
            </tbody>
          </table>
        </div><?php }?>
      </div>

      <div class="margin-left-60">
        <div class="container">
          <form action="../../php/community/story_views_db.php" id="commentForm" name="commentForm" method="post">
            <input type="text" id="name1" name="name1" value="" style="display:none">
            <script>return_s();</script>
            <br><br>
            <div>
              <div>
                <span><strong>댓글</strong></span> <span id="cCnt"></span>
              </div>
              <table class="table">                    
                <tr>
                  <td>
                    <textarea style="width: 1100px" rows="3" cols="30" id="comment" name="comment" placeholder="댓글을 입력하세요"></textarea>
                    <div>
                      <input type="submit" class="btn pull-right" value="등록"/>
                    </div>
                  </td>
                </tr>
                <?php
                  $i=1;
                  $db_conn = mysqli_connect("localhost","root","1234","dream");
                  $query = "SELECT c_writer, c_content, c_date FROM silver_comment where s_index=$_GET[data] ORDER BY c_index ASC";
                  $stmt = mysqli_prepare($db_conn, $query);
                  $exec = mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr></tr>
                <tr>
                  <td>
                    <div style="text-align: left"><?php echo $row['c_writer'] ; ?></div>
                    <div><?php echo $row['c_content']; ?></div>
                    <?php echo $row['c_date']; ?>
                  </td>
                </tr>
                <?php
                    $i++;
                  } 
                  mysqli_free_result($result); 
                  mysqli_stmt_close($stmt);
                  mysqli_close($db_conn);
                ?>
              </table>
            </div>
          </form>
        </div>
      </div>
    </main>
    <footer>
      <section class="padding-2x background-dark full-width">
        <div class="s-18 l-10">
          <img class="logo-menu" src="../../img/dream/logo123.PNG" alt="">
          </br>
          <p class="text-size-18">&nbsp&nbsp&nbsp&nbsp 주소 : 부산광역시 부산진구 가야3동 엄광로 176 동의대학교 건윤관(21번 건물)</p>
          <p class="text-size-18">&nbsp&nbsp&nbsp&nbsp 이용시간 : 월 ~ 금 9:00 ~ 17:00</p>
          <p class="text-size-18">&nbsp&nbsp&nbsp&nbsp 이용문의 : 051-890-4375~4376</p>
        </div>
      </section>
    </footer>
    <script>
    /*
    * 댓글 등록하기(Ajax)
    */
    function createData(post_n,n,nn1) { // 1. 자바스크립트 객체 형태로 전달 
    var sendData = { p_n: post_n, no:n, nn:nn1, story:$("input[name='story1']").val() };
    console.log(sendData); 
    return sendData;
    }
    function subin(method,post_n,n,nn1,idx,x) 
    { 
        alert(idx);
        $.ajax({ 
            type: method,
            url : "/site/post_fix_db.php?mode=" + method, 
            data: createData(post_n,n,nn1),
            dataType:"json", 
            success : function(data, status, xhr) {
                console.log(data); 
            }, 
            error: function(jqXHR, textStatus, errorThrown) { 
                console.log(jqXHR.responseText); 
            }
        });
        
        location.replace('/site/post_views.php?data='+data);
    }
    </script>
      
      <!-- Section 2 -->
      <!-- <section class="section-small-padding background-white text-center" style="text-align: center;">
        
      </section> -->

      <!-- Section 4 -->
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