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
    <!-- TABLE -->
    <!-- SUMMER NOTE -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

    <script src="../../js/summernote/summernote-lite.js"></script>
    <script src="../../js/summernote/lang/summernote-ko-KR.js"></script>
    <script type="text/javascript" src="../../js/navigation_bar.js"></script>
    <link rel="stylesheet" href="../../css/summernote/summernote-lite.css">
    <!-- JS 부분 -->
    <script type="text/javascript" src="<c:url value='/etc/jquery-ui-1.11.2.custom/jquery-ui.js' />"></script>
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
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="../../css/s_template-style.css">   
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
  </head>

  <script type="text/javascript">
    // var user_id = '<?php echo $_SESSION['id']; ?>';
    // var str;
    // function cc1(){
    //   $('div.second').replaceWith('<h2>New heading</h2>');
    //           // alert(user_id);
    //           // alert("!!");
    //   <?php if(session_status() == PHP_SESSION_ACTIVE){?>
    //     //alert("아이디 값 있음");
    //     str = `<li><a href=""></a>
    //             <a href="#">`+user_id+`님 환영합니다</a>
    //               <ul class="main2">
    //                 <li><a href="/site/change.php">회원정보</a></li>
    //                 <li><a href="php/logout.php">로그아웃</a></li>
    //               </ul>
    //            </li>`;
    //   <?php } ?>
    //   <?php if(session_status() == PHP_SESSION_DISABLED){?>
    //     str = `<li><a href="login.html">로그인</a></li>
    //            <li><a href="signup.html">회원가입</a></li>`;
    //   <?php } ?>
      
    //   $('.loginlog').replaceWith(str);
    // }
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
            <img class="logo-dark" src="img/logo-dark.svg" alt="">
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
               <li><a href="../contact/contact.php">Request</a></li>
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
      <form method="post" action="../../php/community/story_write_db.php" >
      <?php
        //echo gettype($val);
         $sql11 = mq("SELECT * FROM silver_story where s_index='{$_GET['index']}'");
        $i=0;
         while($story = $sql11->fetch_array()){
            $writer= $story['s_writer'];
            $n=$story['s_index'];
            echo "<script>test(".$story['s_index'].");</script>";
        ?>
      <table>
            <tr>
                <td><legend style="font-size: 1.5em; line-height:2.5em;">글쓰기</legend></td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="title" name="title" value="<?php echo $story['s_title'] ?>"></br>
                </td>
            </tr>
            <tr>
                <td>
                <textarea name="content" id="summernote" class="summernote"><?php echo $story['s_content'] ?></textarea>
                </td>
            </tr>
            <tr>
              <td>
                <!--<input type="file" name="file" value="파일 선택" accept=".gif, .jpg, .png, .hwp, .doc, .zip" name="file"/>-->
                <input type="file" name="upload_file">
              </td>
            </tr>
            <tr>
                <td>
                    <input type=submit id="check" name="check" value="등록">
                    <input type="button" id="cancel" value="취소" onclick="javascript:location.replace('./story.php');"/>
                </td>
            </tr>
            <input type="hidden" name="s_index" id="s_index" value=<?= $story['s_index'] ?>>
        </table>
        <?php } ?>
        </form>
      </div>
    </div>
      
      <!-- Section 2 -->
      <section class="section-small-padding background-white text-center" style="text-align: center;">
        
      </section>
    <footer>
    </footer>
    <script type="text/javascript" src="../../js/responsee.js"></script>
    <script type="text/javascript" src="../../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../../js/template-scripts.js"></script>
  </body>
  <style>
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
        /* rows="5" cols="33" */
    }
    #check,#cancel{
        width : 100px;
        padding : 9px;
        margin : 4px;
        border:3px;/*버튼테두리 없애기 */
        outline:20px;/*버튼테두리 없애기#D9E5FF #E6E6FA*/
        line-height:1.3em;
        /*background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);*/
    }
    /* #check{
        width : 152px;
        padding : 9px;
        margin : 4px;
        border:3px;/*버튼테두리 없애기 
        outline:20px;/*버튼테두리 없애기#D9E5FF #E6E6FA
        line-height:1.3em;
        background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);
    } */
    /* td{
        text-align: left;
    }
    .container{
        padding:0px 200px 0px 50px;
    }
    body{
        background-repeat : no-repeat;
        background-size : auto;

        line-height:2em;
        background-repeat : no-repeat;
        background-size : cover;
        
        font-family: "맑은 고딕";
        color: #333;
    } */
    </style>
</html>