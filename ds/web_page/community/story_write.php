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
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="../../css/s_template-style.css">   
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
  </head>

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
                <!--<input type="file" name="file" value="파일 선택" accept=".gif, .jpg, .png, .hwp, .doc, .zip" name="file"/>-->
                <input type="file" name="upload_file">
              </td>
            </tr>
            <tr>
                <td>
                    <input type=submit id="check" name="check" value="등록">
                    <input type="button" id="cancel" value="취소" onclick="javascript:location.replace('/story.php');"/>
                </td>
            </tr>
        </table>
        </form>
      </div>
    </div>
      
      
      <!-- Section 2 -->
      <section class="section-small-padding background-white text-center" style="text-align: center;">
        
      </section>

      <!-- Section 4 -->
    
    <!-- FOOTER -->
    <footer>
      <!-- Social -->
      <!-- <div class="background-primary padding text-center">
        <a href="/"><i class="icon-facebook_circle text-size-25 text-dark"></i></a> 
        <a href="/"><i class="icon-twitter_circle text-size-25 text-dark"></i></a>
        <a href="/"><i class="icon-google_plus_circle text-size-25 text-dark"></i></a>
        <a href="/"><i class="icon-instagram_circle text-size-25 text-dark"></i></a> 
        <a href="/"><i class="icon-linked_in_circle text-size-25 text-dark"></i></a>                                                                       
      </div> -->
      <!-- Main Footer -->
      <!-- <section class="section background-dark">
        <div class="line"> 
          <div class="margin2x">
            <div class="s-12 m-6 l-3 xl-5">
               <h4 class="text-white text-strong">Our Mission</h4>
               <p>
                 <b class="text-size-20">Veri fastidii consectetuer</b> ius in, eum alii dicunt omnium eu. Wisi nostrud equidem ut usu. <b class="text-size-20">Deleniti pertinacia eu est</b>, te his soluta quaestio pericula.
               </p>
            </div>
            <div class="s-12 m-6 l-3 xl-2">
               <h4 class="text-white text-strong margin-m-top-30">Useful Links</h4>
               <a class="text-primary-hover" href="page.html">FAQ</a><br>      
               <a class="text-primary-hover" href="contact.html">Contact Us</a><br>
               <a class="text-primary-hover" href="blog.html">Blog</a>
            </div>
            <div class="s-12 m-6 l-3 xl-2">
               <h4 class="text-white text-strong margin-m-top-30">Term of Use</h4>
               <a class="text-primary-hover" href="page.html">Terms and Conditions</a><br>
               <a class="text-primary-hover" href="page.html">Refund Policy</a><br>
               <a class="text-primary-hover" href="page.html">Disclaimer</a>
            </div>
            <div class="s-12 m-6 l-3 xl-3">
               <h4 class="text-white text-strong margin-m-top-30">Contact Us</h4>
                <p><i class="icon-sli-screen-smartphone text-primary"></i> 0800 4521 800 50</p>
                <a class="text-primary-hover" href="mailto:contact@sampledomain.com"><i class="icon-sli-mouse text-primary"></i> contact@sampledomain.com</a><br>
                <a class="text-primary-hover" href="mailto:office@sampledomain.com"><i class="icon-sli-mouse text-primary"></i> office@sampledomain.com</a>
            </div>
          </div>  
        </div>    
      </section>
      <div class="background-dark">
         <div class="line">
            <hr class="break margin-top-bottom-0" style="border-color: #777;">
         </div>
      </div> -->
      <!-- Bottom Footer -->
      <!-- <section class="padding-2x background-dark full-width">
        <div class="line">
          <div class="s-12 l-6">
            <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
            <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
          </div>
          <div class="s-12 l-6">
            <a class="right text-size-12 text-primary-hover" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Responsee Team</a>
          </div>
        </div>  
      </section> -->
    </footer>
    <script type="text/javascript" src="../../js/responsee.js"></script>
    <script type="text/javascript" src="../../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../../js/template-scripts.js"></script>
  </body>
  <style>
    #addpost{
        /* position:absolute;
        top:0;right:0;bottom:0;left:0;
        display:-webkit-box;
        display:-moz-box;
        display:-ms-flexbox;
        display:-webkit-flex;
        display:flex;
    
        align-items:center;
        justify-content:center;
        -webkit-align-items:center;
        -webkit-justify-content:center;
  
        -webkit-box-pack:center;
        -webkit-box-align:center; 
        -moz-box-pack:center;
        -moz-box-align:center; 
        -ms-box-pack:center;
        -ms-box-align:center;
        padding: 0;     
        margin-bottom: 0; */
        /* border: 1px solid #bcbcbc; */
        /* text-align: center; */
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