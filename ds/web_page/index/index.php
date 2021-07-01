 <?php  
  include "../../db.php";
  // if(!isset($_SESSION['id'])){
  //   $_SESSION['id']="-1";
  // }
?>
<!DOCTYPE html>
<html lang="en-US">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:url" content="http://113.198.230.225/ds/web_page/index/index.php">
    <meta property="og:title" content="드림스테이션">
    <meta property="og:type" content="website">
    <meta property="og:image" content="../../img/dream/mobile_logo.jpg" />
    <meta property="og:description" content="꿈을 이뤄주기 위한 정거장, 드림스테이션">
    <title>DREAM STATION</title>
    <link rel="stylesheet" href="../../css/components.css">
    <link rel="stylesheet" href="../../css/icons.css">
    <link rel="stylesheet" href="../../css/responsee.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../../css/lightcase.css">
    <link rel="stylesheet" href="../../css/main1.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="../../css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-ui.min.js"></script> 
    <script type="text/javascript" src="../../js/navigation_bar.js?after"></script>  
  </head>
  <script type="text/javascript">
    $(window).resize(function(){resizeYoutube();});
    $(function(){resizeYoutube();});
    //밑줄 그여도 걍 무시하삼!!!! 없어지면 안댐!!!
    function resizeYoutube(){ $("iframe").each(function(){ if( /^https?:\/\/www.youtube.com\/embed\//g.test($(this).attr("src")) ){ $(this).css("width","30%"); $(this).css("height",Math.ceil( parseInt($(this).css("width")) * 480 / 854 ) + "px");} }); }}  </script>
  <body class="size-1280">
  	<a target="_blank" class="top" href="#header" style="position:fixed;bottom:5px;right:5px;z-index:10;"><img src="../../img/dream/up.png" alt=""></a>
    <header role="banner" class="position-absolute">    
      <nav class="background-transparent background-primary-dott full-width sticky">      
        <div class="logo hide-l hide-xl hide-xxl">
           <a href="index.php" class="logo">
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
               <li><a href="./index.php">Home</a></li>
               <li><a href="../about-us/about-us.php">About Us</a></li>
               <li><a href="../request/request.php">Request</a></li>
            </ul>
         </div>
          <ul class="logo-menu">
            <a href="./index.php" class="logo">
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
      <header class="section background-image text-center" style="background-image:url(../../img/dream/backg.jpg)">
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
          Dream Station
        </h1>
        <p class="text-white">Dream Station은 여러분의 꿈을 이루어 드립니다!<br> Dream Station vous accomplit vos rêves !</p>
        <i class="slow icon-sli-arrow-down text-white margin-top-20 text-size-16"></i>  
        <img class="arrow-object" src="../../img/arrow-object-white.svg" alt="">
      </header>

      <section class="section background-white">      
        <div class="line text-center">
        <?php
          $sql = mq("SELECT url FROM link WHERE category='youtube'");
          while ($link = $sql->fetch_assoc()){
        ?>       
        <div class="youtubeWrap"> 
          <p align="middle">
          <?php echo $link['url']; ?>
          </p>
          </div>
          <?php } ?>
        </div>
        <div class="s-12 m-12 l-3 center">
        </br></br></br>
          <a href="https://www.youtube.com/channel/UCUrH6aBzUeEt_Lp-FT9LDEg" class="s-12 button border-radius background-primary text-size-20 text-white">유튜브 채널 바로가기</a>
        </div>
      </section>
      
      <section class="section background-white">      
        <div class="line text-center">
          <p class="text-primary text-size-20">-------------------</p>
          <h2 class="text-dark text-size-50 text-m-size-40">Our <b>Station</b></h2>
          <i class="icon-chevron_down text-primary margin-bottom-50 text-size-20"></i> 
        </div> 
        
        <div class="l-12 xl-7 center"> 
          <div class="margin">
            <div class="s-19 m-12 l-4 text-right"> 
              <div class="margin-right-50">
                <i class="icon-sli-paper-plane text-primary text-size-40 margin-bottom-20"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">METAL STATION 101</h3>
                <p>금속 3D프린터를 활용하여 정밀하고 혁신적인 금속 제품을 제조하는 공간</p>
                <p>(산학협력관 101호)</p>
              </div>
              
              <div class="line"> 
                <hr class="break background-primary break-small right margin-top-bottom-40">
              </div>
              
              <div class="margin-right-50">
                <i class="icon-sli-bulb text-primary text-size-40 margin-bottom-20"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">MAKER STATION 321</h3>
                <p>디지털 제조 장비를 활용한 제품 제작 및 후가공 등 자유로운 창작 활동을 지원하는 공간</p>
                <p>(건윤관 301호)</p>
              </div> 
            </div>
            <div class="s-19 m-12 l-4 ">                                                                                   
              <div class="carousel-default owl-carousel carousel-hide-arrows margin-m-top-bottom-20">                                                                                              
                <div class="item">                                                                                                                                                                                                     
                  <img src="../../img/dream/Explanation1.jpg"/>                                                                                                                                                              
                </div>              
                <div class="item">                                                                                                                                                                                                                 
                  <img src="../../img/dream/Explanation2.jpg"/>                                                                                                                                                                                                                                                                                                                                                                                     
                </div>              
                <div class="item">                                                                                                                                                                                                     
                  <img src="../../img/dream/Explanation3.jpg"/>                                                                                                                                                            
                </div>              
                <div class="item">
                  <img src="../../img/dream/Explanation4.jpg"/>                                                                                                                                                            
                </div>                                                                                                                                      
              </div>
            </div> 
            
            <div class="s-19 m-12 l-4"> 
               <div class="margin-left-50">
                <i class="icon-sli-heart text-primary text-size-40 margin-bottom-20"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">IDEA STATION 101</h3>
                <p>제품이나 서비스 등 아이템을 발굴하고, 스스로 고안한 아이디어를 작품으로 구체화하는 공간</p>
                <p>(건윤관 101호)</p>
              </div>
              
              <div class="line"> 
                <hr class="break background-primary break-small margin-top-bottom-40">
              </div>
              
              <div class="margin-left-50">
                <i class="icon-sli-layers text-primary text-size-40 margin-bottom-20"></i>
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">FILM STATION 315</h3>
                <p>자동 영상, 편집 장비를 활용하여 미디어 콘텐츠를 제작할 수 있는 공간</p>
                <p>(건윤관 302호)</p>
              </div> 
            </div> 
          </div>                                                                                              
        </div>       
      </section>
      
      <section class="background-primary full-width">        
        <div class="m-12 l-6 xl-5 xxl-4">
          <img class="full-img" src="../../img/dream/dt4.JPG"/>
        </div>         
        <div class="m-12 l-6 xl-7 xxl-8">
          <div class="l-12 xl-11 xxl-8 padding-2x">
            <h2 class="text-l-size-40 text-size-50 text-white"><b>DREAM STATION</b>은 </h2>
            <br class="margin-bottom"><b>우리 대학교 재학생, 중·고등학생, 일반인 등을 대상으로 메이커 교육을 수행하고자 설립됐다.</b></br>
            <b>
              이를 위해 DREAM STATION은 첨단 디지털 장비를 활용한 교육 및 체험 프로그램 등을 운영하며 이용자가 자신의 아이디어를 결과물로
              제작·공유할 수 있도록 적극 지원하고 있다.
            </b></br>
            <b>
              동의대학교는 DREAM STATION을 통해 산업 수요에 맞는 인재를 양성할 뿐만 아니라
              부산·경남 지역의 관련 기관 및 산업체와 네트워크를 구축하여 지역사회 발전에 이바지할 계획이다.
            </b>
            </p>
          </div>  
        </div>
      </section>
      
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
    .youtubeWrap{
      position: relative;
      height: 0;
      padding-top: 0px;
      padding-bottom: 56.25%;
      overflow: hidden;
    }
    .youtubeWrap iframe,.youtubeWrap object,.youtubeWrap embed {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  a.top {
    position: fixed;
    left: 97%;
    bottom: 50px;
    display: none;
  }
</style>
  </body>
</html>