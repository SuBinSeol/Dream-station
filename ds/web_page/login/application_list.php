<?php  
  include "../../db.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>My page</title>
        <link rel="stylesheet" href="../../css/components.css">
        <link rel="stylesheet" href="../../css/icons.css">
        <link rel="stylesheet" href="../../css/responsee.css">
        <link rel="stylesheet" href="../../owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="../../owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="../../css/lightcase.css">
        <link rel="stylesheet" href="../../css/main1.css">
        <link rel="stylesheet" href="../../css/template-style1.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
        <script type="text/javascript" src="../../js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../../js/jquery-ui.min.js"></script>
        <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
        <script type="text/javascript" src="../../js/navigation_bar.js"></script>  
    </head>
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
          <header class="section background-image text-center" style="background-image:url(../../img/dream/backg.jpg)">
            <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
              My Page
            </h1>
            <p class="animated-element text-white">신청목록</p>
            <img class="arrow-object" src="../../img/arrow-object-white.svg" alt="">
          </header>
              <h3 class="text-size-30 margin-bottom-40 text-center"><b>신청목록</b></h3>
                </br>
                <center>
                <img src="../../img/dream/request_course.png" style="width:60%; text-align:center;"/>
                </center>
                </br>
             <table border="1">
             <tr>
                        <th>번호</th>
                        <th>신청자</th>
                        <th>파일명</th>
                        <th>장비명</th>
                        <th>요청 사항</th>
                        <th>상태</th>
            </tr>
             <?php
                $i=1;
                $sql = mq("select * from upload_file where user_id='{$_SESSION['id']}' ORDER BY file_num ASC");
                while($row = $sql->fetch_array()){
              ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row['user_id'] ?></td>
                        <td><a href="download.php?file_id=<?= $row['file_id'] ?>" target="_blank"><?= $row['name_orig'] ?></a></td>
                        <td><?= $row['equipment'] ?></td>
                        <td><?= $row['Request'] ?></td>
                        <td><?= $row['states'] ?></td> 
                    </tr>
             <?php
                $i++;
                } 
            ?>
        </table> 
          <section></section>  
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
        </article>
      </main>
    
</body>
</html>