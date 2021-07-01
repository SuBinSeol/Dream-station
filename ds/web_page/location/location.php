<?php  
  include "../../db.php";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOCATION</title>
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
    <script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script type="text/javascript" src="../../js/navigation_bar.js"></script>
  </head>
  
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
        <header class="section background-image text-center" style="background-image:url(../../img/dream/backg4.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Location
          </h1>
          <p class="animated-element text-white">찾아오시는 길</p>
          
          <img class="arrow-object" src="../../img/arrow-object-white.svg" alt="">
        </header>
        
      </article>
      <div class="margin-left" style="text-align: center;">
      </br></br>
        <h2 class="text-size-20 margin-bottom-10 text-strong">동의대학교 건윤관(21번 건물)</h2>                
        <p>이용시간 : 월 ~ 금 9:00 ~ 17:00</p>
        <p>이용문의 : 051-890-4375~4376</p> 
        <center>
        <p align="middle">
          <div id="map" style="width:80%;height:400px;"></div>
	        <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=8113417f0b581a9a9e0abec4886d1e21"></script>
	        <script>
		        var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
              mapOption = { 
                center: new kakao.maps.LatLng(35.145384, 129.035892), // 지도의 중심좌표
                draggable: true,
                level: 3 // 지도의 확대 레벨
              };
            var map = new kakao.maps.Map(mapContainer, mapOption);

            // 마커가 표시될 위치입니다 
            var markerPosition  = new kakao.maps.LatLng(35.145384, 129.035892); 
            // 마커를 생성합니다
            var marker = new kakao.maps.Marker({
              position: markerPosition
            });
            // 마커가 지도 위에 표시되도록 설정합니다
            marker.setMap(map);
            // 마커에 커서가 오버됐을 때 마커 위에 표시할 인포윈도우를 생성합니다
            var iwContent = '<div style="padding:5px;">드림스테이션</div>'; // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
            // 인포윈도우를 생성합니다
            var infowindow = new kakao.maps.InfoWindow({
              content : iwContent
            });
            // 마커에 마우스오버 이벤트를 등록합니다
            kakao.maps.event.addListener(marker, 'mouseover', function() {
            // 마커에 마우스오버 이벤트가 발생하면 인포윈도우를 마커위에 표시합니다
              infowindow.open(map, marker);
            });
            // 마커에 마우스아웃 이벤트를 등록합니다
            kakao.maps.event.addListener(marker, 'mouseout', function() {
              // 마커에 마우스아웃 이벤트가 발생하면 인포윈도우를 제거합니다
              infowindow.close();
          });
          </script>
        </p>
      </center>      
      </div>
      
      <!-- Section 2 -->
      <section class="section-small-padding background-white text-center" style="text-align: center;">
        
      </section>

      <!-- Section 4 -->
    
    <!-- FOOTER -->
    
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