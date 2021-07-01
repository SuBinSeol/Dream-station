<?php  
  include "../../db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>My Page</title>
        <link rel="stylesheet" href="../../css/components.css">
        <link rel="stylesheet" href="../../css/icons.css">
        <link rel="stylesheet" href="../../css/responsee.css">
        <link rel="stylesheet" href="../../owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="../../owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="../../css/lightcase.css">
        <link rel="stylesheet" href="../../css/main1.css">
        <link rel="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CUSTOM STYLE -->      
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
              <img class="logo-white" src="../../img/dream/logo123.png" alt="">
              <img class="logo-dark" src="../../img/dream/logo123.png" alt="">
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
            <p class="animated-element text-white">마이페이지</p>
            <img class="arrow-object" src="../../img/arrow-object-white.svg" alt="">
          </header>
          <div class="s-12 m-12 l-4 center">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>마이페이지</b></h3>
            <form action="../../php/login/mypage_change_db.php" method="post" class="customform">
              <?php
                $sql = mq("select * from information where id='{$_SESSION['id']}'");
                while($information = $sql->fetch_array()){
              ?>
              <table style="border: 0px solid red; margin-left: auto;  margin-right: auto;">
                <legend style="font-size: 2em; line-height:2.5em;"></legend>
                <tr>
                    <th>아이디</th>
                    <td>
                    <input type="text" name="id" id="id" value="<?php echo $_SESSION['id'];?>" disabled style="color:black;  margin:0px;"/>
                    <div class="check_font" id="id_check" style="color:red;"></div>
                    </br>
                    </td>
                </tr>
                <tr>
                    <th>비밀번호</th>
                    <td>
                    <div class="main">
                    <input type="password" name="password" id="password" value="" style="color:black;  margin:0px;"/>
                      <i class="fa fa-eye fa-lg"></i></br>
                      <div class="check_font" id="pw_check" style="color:red;"></div>
                    </div>
                    </td>
                </tr>
    
                <tr>
                    <th>이름</th>
                    <td>
                    <input type="text" name="name" id="name" value="<?php echo $information['name'];?>" style="color:black;  margin:0px;"/>
                    <div class="check_font" id="name_check" style="color:red;"></div>
                    </td>
                </tr>
    
                <tr>
                    <th>전화번호</th>
                    <td>
                    <input type="text" name="tel" id="tel" value="<?php echo $information['tel'];?>" style="color:black;  margin:0px;"/>
                    <div class="check_font" id="phone_check" style="color:red;"></div>
                    </td>
                </tr>

                <tr>
                    <th>등급</th>
                    <td>
                    <input type="text" name="class" id="class" value="<?php echo $information['class'];?>" disabled style="color:black;  margin:0px;"/>
                    <div class="check_font" id="st_check" style="color:red;"></div>
                    </td>
                </tr>
             </table>
             <?php } ?>
             <div class="s-12" id="check"><button class="button border-radius text-white background-primary" type="submit">변경</button></div>
            </form>

            </br>
                <center>
                <img src="../../img/dream/member_course.png" style="text-align:center;"/>
                </center>
                </br>
          </div>

          <script>
            //모든 공백 체크 정규식
            var empJ = /\s/g;

            //아이디 정규식 + a-z, 0-9로 시작하는 4-12자리 아이디를 만들 수 있다.
            var idJ = /^[a-z0-9]{4,12}$/;

            // 비밀번호 정규식 + A-Z,a-z,0-9로 시작하는 4-12자리 비밀번호를 설정할 수 있다.
            var pwJ = /^[A-Za-z0-9]{6,12}$/; 

            // 이름 정규식 + 가-힇, 한글로 이뤄진 문자만으로 2-6자리 이름을 적어야 한다.
            var nameJ = /^[가-힣]{2,6}$/;

            // 휴대폰 번호 정규식 + -생략하고 01?(3글자) 방식으로 나머지 적용하면 된다.
            var phoneJ = /^01([0|1|6|7|8|9]?)?([0-9]{3,4})?([0-9]{4})$/;

            // 이름에 특수문자 들어가지 않도록 설정
            $("#name").blur(function() {
              if (nameJ.test($(this).val())) {
                console.log(nameJ.test($(this).val()));
                $("#name_check").text('');
              } else {
                $('#name_check').text('이름을 확인해주세요.');
                $('#name_check').css('color', 'red');
              }
            });

            // 휴대전화
            $('#tel').blur(function(){
              if(phoneJ.test($(this).val())){
                console.log(nameJ.test($(this).val()));
                $("#phone_check").text('');
              } else {
                $('#phone_check').text('휴대폰번호를 확인해주세요.');
                $('#phone_check').css('color', 'red');
              }
            });

            // 비밀번호 조건 설정
            $("#password").blur(function() {
              if (pwJ.test($(this).val())) {
                console.log(pwJ.test($(this).val()));
                $("#pw_check").text('');
              } else {
                $('#pw_check').text('비밀번호는 6자리 이상 12자리 이하입니다.');
                $('#pw_check').css('color', 'red');
              }
            });

            // 비밀번호 조건 설정2
            $("#password2").blur(function() {
              if (pwJ.test($(this).val())) {
                console.log(pwJ.test($(this).val()));
                $("#pw2_check").text('');
              } else {
                $('#pw2_check').text('비밀번호는 6자리 이상 12자리 이하입니다.');
                $('#pw2_check').css('color', 'red');
              }
            });

            $(document).ready(function(){
              $('.main i').on('click',function(){
                  $('input').toggleClass('active');
                  if($('input').hasClass('active')){
                    $(this).attr('class',"fa fa-eye-slash fa-lg")
                    .prev('input').attr('type',"text");
                  }else{
                    $(this).attr('class',"fa fa-eye fa-lg")
                    .prev('input').attr('type','password');
                  }
              });
            });
          </script>
          <footer>
            <section class="padding-2x background-dark full-width">
              <div class="s-18 l-10">
                <img class="logo-menu" src="../../img/dream/logo123.png" alt="">
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
<style>
    div.main{
      position: relative;
    }
    div.main input{
      background-color: black;
      border: 0;
      color: white;
      text-indent: 10px;
    }
    div.main i{
      position: absolute;
      left: 93%;
      top: 14px;
      color: black;
    }
  </style>
</html>