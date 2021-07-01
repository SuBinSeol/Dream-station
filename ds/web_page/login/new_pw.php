<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>비밀번호 변경</title>
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
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script type="text/javascript" src="js/navigation_bar.js"></script>
    </head>
    <script type="text/javascript">
      function checkIt(f){
        //비밀번호
        var new_password = f.newpw.value;
        new_password=new_password.trim();
        //비밀번호확인
        var new_password2 = f.newpw2.value;
        new_password2=new_password2.trim();

        if(new_password!=new_password2){
            alert("비밀번호를 다시 확인해 주세요.");
            return false;
        }
        if (new_password==''|| new_password2==''){
            alert("빈 항목이 존재합니다.");
            return false;
        }
        return true;
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
          <header class="section background-image text-center" style="background-image:url(../../img/dream/backg.jpg)">
            <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
              Forgot your password
            </h1>
            <p class="animated-element">비밀번호 변경</p>
            
            <!-- white full width arrow object -->
            <img class="arrow-object" src="../../img/arrow-object-white.svg" alt="">
          </header>
          <div class="s-12 m-12 l-4 center">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>비밀번호 변경</b></h3>
            <form name="join" class="customform" method="post" action="php/login/new_pw_db.php" onsubmit="return checkIt(this)">
              <table style="border: 0px solid red; margin-left: auto;  margin-right: auto;">           
                <div class="line">    
                  <div class="s-12">
                  <div class="main">
                    <input id="newpw" name="newpw" class="newpw" placeholder="새로운 비밀번호" title="newpw" type="password" style="color:black;  margin:0px;"/>
                    <i class="fa fa-eye fa-lg"></i></br>
                    <div class="check_font" id="pw_check" style="color:red;"></div>
                  </div>
                  </br>
                  </div>
                  <div class="s-12">
                  <div class="main">
                    <input id="newpw2" name="newpw2" class="newpw2" placeholder="새로운 비밀번호 확인" title="newpw2" type="password" style="color:black;  margin:0px;"/>
                      <i class="fa fa-eye fa-lg"></i></br>
                      <div class="check_font" id="pw2_check" style="color:red;"></div>
                  </div>
                  </br>
                  </div>
                  <div class="s-12">
                  <div class="s-12" id="check"><button class="button border-radius text-white background-primary" type="submit">변경</button></div>
                  </div>
                </div>  
              </table>  
            </form>
          </div> 

          <script>
            // 비밀번호 정규식 + A-Z,a-z,0-9로 시작하는 4-12자리 비밀번호를 설정할 수 있다.
            var pwJ = /^[A-Za-z0-9]{6,12}$/; 
            
            // 비밀번호 조건 설정
            $("#newpw").blur(function() {
              if (pwJ.test($(this).val())) {
                console.log(pwJ.test($(this).val()));
                $("#pw_check").text('');
              } else {
                $('#pw_check').text('비밀번호는 6자리 이상 12자리 이하입니다.');
                $('#pw_check').css('color', 'red');
              }
            });

            // 비밀번호 조건 설정2
            $("#newpw2").blur(function() {
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