<?php  
  include "../../db.php";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GALLERY</title>
    <link rel="stylesheet" href="../../css/components.css">
    <link rel="stylesheet" href="../../css/icons.css">
    <link rel="stylesheet" href="../../css/responsee.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../../css/lightcase.css">
    <link rel="stylesheet" href="../../css/cardlayout.css">
    <link rel="stylesheet" href="../../css/main1.css">
    <!-- MODAL -->
    <!-- Remember to include jQuery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="../../css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-ui.min.js"></script>  
    <script type="text/javascript" src="../../js/navigation_bar.js"></script>   
    
  </head>
  
  <body class="size-1280">
    <!-- HEADER -->
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
  	<a target="_blank" class="top" href="#header" style="position:fixed;bottom:5px;right:5px;z-index:10;"><img src="../../img/dream/up.png" alt=""></a>
    <header role="banner" class="position-absolute">
      <nav class="background-transparent background-primary-dott full-width sticky">
        <div class="logo hide-l hide-xl hide-xxl">
           <a href="../index/index.php" class="logo">
            <img class="logo-dark" src="../../img/dream/logo123.PNG" alt="">
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
               <li><a href="../index/index.php">Home</a></li>
               <li><a href="../about-us/about-us.php">About Us</a></li>
               <li><a href="../request/request.php">Request</a></li>
            </ul>
         </div>
          
          <ul class="logo-menu">
            <a href="../index/index.php" class="logo">
              <img class="logo-white" src="../../img/dream/logo123.PNG" alt="">
              <img class="logo-dark" src="../../img/dream/logo123.PNG" alt="">
            </a>
          </ul>
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
    
    <main role="main">
      <article>
        <header class="section background-image text-center" style="background-image:url(../../img/dream/backg3.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Gallery
          </h1>
          <img class="arrow-object" src="../../img/arrow-object-white.svg" alt="">
        </header>
        
        <section class="section background-white">      
          <div id="columns">
            <?php
              $sql = mq("SELECT * FROM pictures");
              $f_pic = array();
              $f_content = array();
              $f_date = array();
              while ($pictures = $sql->fetch_assoc()){
                array_push($f_pic, $pictures['pic']);
                array_push($f_content, $pictures['content']);
                array_push($f_date, $pictures['date']);
              }?>
              <script>
                var j_pic = <?php echo json_encode($f_pic);?>;
                var j_content = <?php echo json_encode($f_content);?>;
                var j_date = <?php echo json_encode($f_date);?>;
                for(var i=0; i<j_date.length; i++){
                  document.write('<figure>');
                  document.write('<img src="../../gallery_img/');document.write(j_pic[i]); document.write(' ">');
                  document.write('<figcaption>'); document.write(j_content[i]); document.write('</figcaption>');
                  document.write('</figure>');
                }
              </script>
          </div>
        </section>
      </article>
      
      <hr class="break">
    </main>

    <footer>
      <section class="padding-2x background-dark full-width">
        <div class="s-18 l-10">
          <img class="logo-menu" src="../../img/dream/logo123.PNG" alt="">
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
  <script>
      $( window ).scroll( function() {
	      if ( $( this ).scrollTop() > 200 ) {
		    $( '.top' ).fadeIn();
	      } else {
		      $( '.top' ).fadeOut();
	      }
      } );

      $( '.top' ).click( function() {
	      $( 'html, body' ).animate( { scrollTop : 0 }, 400 );
	        return false;
      } );
    </script>
  <style>
    a.top {
      position: fixed;
      left: 97%;
      bottom: 50px;
      display: none;
    }
  </style>
</html>