<?php  
  include "../../db.php";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REQUEST</title>
    <link rel="stylesheet" href="../../css/components.css">
    <link rel="stylesheet" href="../../css/icons.css">
    <link rel="stylesheet" href="../../css/responsee.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../../css/lightcase.css">
    <link rel="stylesheet" href="../../css/main1.css">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <link rel="stylesheet" href="../../css/cardlayout.css">
    <meta name="Description" content="">
    <link rel="stylesheet" href="../../base.css" />
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="../../css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-ui.min.js"></script>   
    <script type="text/javascript" src="../../js/navigation_bar.js"></script>   
  </head>

  <body class="size-1280">
    <!-- PREMIUM FEATURES BUTTON -->
    <script type="text/javascript">
      function formSubmit(f) {
        var extArray = new Array('hwp','xls','doc','xlsx','docx','pdf','jpg','gif','png','txt','ppt','pptx','stl','obj','zip');
        var path = document.getElementById("upfile").value;
        if(path == "") {
          alert("파일을 선택해 주세요.");
          return false;
        }
        
        var pos = path.indexOf(".");
        if(pos < 0) {
          alert("확장자가 없는파일 입니다.");
          return false;
        }
        
        var ext = path.slice(path.indexOf(".") + 1).toLowerCase();
        var checkExt = false;
        for(var i = 0; i < extArray.length; i++) {
          if(ext == extArray[i]) {
            checkExt = true;
            break;
          }
        }

        if(checkExt == false) {
          alert("업로드 할 수 없는 파일 확장자 입니다.");
            return false;
        }
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
    
    <!-- MAIN -->
    <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(../../img/dream/backg5.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Request
          </h1>
          <p class="animated-element text-white">의뢰 신청</p>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="../../img/arrow-object-white.svg" alt="">
        </header>
        
        <!-- Section 1 -->
        <section class="section-small-padding background-white text-center"> 
          <form class="customform text-black" name="picUpload" method="post" action="./upload_process.php" enctype="multipart/form-data" style="width=60%;" onsubmit="return formSubmit(this);">
            <fieldset>
              <legend>도안 정보</legend>
                <div class="picPopBox">
                    <table class="table_row W100P" style="text-align:center;">
                      <tr>
                            <td>
                                장비 선택 : 
                                <select name="equipment">
                                  <option>============(선택해주세요)============</option>
                                  <!--<option>3D printer(3D WOX 1 크기 421*433*439)</option>
                                  <option disabled>3D printer(3D WOX 2X 490*466*573MM) - 수리중</option>
                                  <option>레이저 컷팅기(MT-460R 1020 x 750 x 650mm)</option>
                                  <option>메이크블록 레이저 컷팅기()</option>
                                  <option>컴퓨터 자수기(PR670E 512*598*779mm)</option>
                                  <option>레이저 각인기(md-x1020 440*280*440)</option>-->
                                  <?php
                                    $sql = mq("SELECT * FROM equipment");
                                    $e_name = array();
                                    $e_amount = array();
                                    $e_usage = array();
                                    while ($equipments = $sql->fetch_assoc()){
                                      array_push($e_name, $equipments['name']);
                                      array_push($e_amount, $equipments['amount']);
                                      array_push($e_usage, $equipments['usage']);
                                    }
                                  ?>
                                  <script>
                                      var s_name = <?php echo json_encode($e_name);?>;
                                      var s_amount = <?php echo json_encode($e_amount);?>;
                                      var s_usage = <?php echo json_encode($e_usage);?>;

                                      for(var i=0; i<s_name.length; i++){
                                        if(s_usage[i]=='수리중'){
                                          document.write('<option disabled>');
                                          document.write(s_name[i]); document.write('-수리중 </option>');
                                        }
                                        else if(s_usage[i]=='고장'){
                                          document.write('<option disabled>');
                                          document.write(s_name[i]); document.write('-고장 </option>');
                                        }
                                        else{
                                          document.write('<option>');
                                          document.write(s_name[i]); document.write('</option>');
                                        }
                                        
                                      }
                                  </script>
                                  
                                </select>
                            </td>
                          </tr>
                      <tr>
                          <td><textarea rows="17" cols="100" name="contents" placeholder="요청사항을 작성해 주십시오."></textarea></td>
                      </tr>
                      <tr>
                          <td>
                            <input type="file" name="upfile" id="upfile" />
                            ▪ 지원확장자 : &nbsp&nbspSTL, OBJ, ▪ 최대 파일 크기 : &nbsp&nbsp30MB
                          </td>
                      </tr>
                    </table>
                </div>
                <div class="s-12"><button class="button border-radius text-white background-primary" type="submit">신청하기</button></div>
                </div>
            </fieldset>
          </form>     
          <div class="line">
      </br></br></br>
            <h2 class="text-dark text-size-50 text-m-size-10">OR</h2>
          </div>                                                                                                    
        </section>
        <section class="section-small-padding background-white text-center"> 
          <form class="customform text-black" name="picUpload" method="post" action="./upload_process.php" enctype="multipart/form-data" style="width=60%;" onsubmit="return formSubmit(this);">
            <fieldset style="border:0px;">
                <div class="picPopBox">
                <?php
                  $sql = mq("SELECT url FROM link WHERE category='google'");
                  while ($link = $sql->fetch_assoc()){
                ?>
                <a href="<?php echo $link['url']; ?>" class="s-12 button border-radius background-primary text-size-20 text-white">Google Form으로 신청하기</a>
                <?php } ?>
            </fieldset>
          </form>     
          <div class="line">
      </br></br></br>
            <i class="icon-sli-heart text-primary text-size-40"></i>
            <h2 class="text-dark text-size-50 text-m-size-40">장비 소개</h2>
          </div>                                                                                                    
        </section>

        <!-- Section 2 -->
        <section class="full-width background-grey">
          <div class="m-12 l-6">
                <table border='0'>
                  <tr class="top">
                    <td style="width:200px;">
                      <img src="../../machine/3D 프린터2.jpg" style="max-width: 100%; height: auto;">
                    </td>
                    <td style="font-size:20px;">
                    <b>장비명 : 3D 프린터 WOX1</b> </br></br>
                    장비 수 : 5대 </br>
                    참고사항 : 출력물 최대 사이즈 20x20x20,</br>
                　　　　　필라멘트 지참 필수
                    </td>
                  </tr>
                  <tr>
                    <td style="width:200px;">
                      <img src="../../machine/3D 프린터1.jpg" style="max-width: 100%; height: auto;">
                    </td>
                    <td style="font-size:20px;">
                      <b>장비명 : 3D 프린터 WOX2</b> </br></br>
                      장비 수 : 20대 </br>
                      참고사항 : 출력물 최대 사이즈 20x20x20,</br>
                　    　　　　필라멘트 지참 필수
                    </td>
                  </tr>
                  <tr>
                    <td style="width:200px;">
                      <img src="../../machine/레이저 컷팅기.jpg" style="max-width: 100%; height: auto;">
                    </td>
                    <td style="font-size:20px;">
                    <b>장비명 : 레이저 컷팅기</b> </br></br>
                    장비 수 : 1대 </br>
                    참고사항 : 합판, 아크릴 재료 지참
                    </td>
                  </tr>
                </table>
          </div>
          <div class="m-12 l-6">
            <table border='0'>
              <tr>
                <td style="width:200px;">
                  <img src="../../machine/메이크블록 레이저 컷팅기.jpg" style="max-width: 100%; height: auto;">
                </td>
                <td style="font-size:20px;">
                  <b>장비명 : 메이크블록 레이저 컷팅기</b> </br></br>
                  장비 수 : 1대 </br>
                  참고사항 : 합판, 아크릴 재료 지참
                </td>
              </tr>
              <tr>
                <td style="width:200px;">
                  <img src="../../machine/컴퓨터 자수기.jpg" style="max-width: 100%; height: auto;">
                </td>
                <td style="font-size:20px;">
                  <b>장비명 : 컴퓨터 자수기</b> </br></br>
                  장비 수 : 1대 </br>
                  참고사항 : 기계에 내장되어 있는 디자인만 사용 가능,</br>
                　　　　　영어, 일본어만 사용 가능
                </td>
              </tr>
              <tr>
                <td style="width:200px;">
                  <img src="../../machine/레이저 각인기.jpg" style="max-width: 100%; height: auto;">
                </td>
                <td style="font-size:20px;">
                  <b>장비명 : 레이저 각인기</b> </br></br>
                  장비 수 : 1대 </br>
                  참고사항 : 금속 재료만 가능,</br>
                  　　　　　샘플 값 모를 경우 테스트해볼 재료 있는 것이 좋음
                </td>
              </tr>
            </table>
          </div>
        </section>
      </article>
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
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
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
        #holder,#holder1 { 
            border: 10px dashed #ccc; 
            width: 500px; 
            height: 290px; 
        }
        #holder.hover,#holder1.hover { 
            border: 10px dashed #333; 
        }
        a.top {
        position: fixed;
        left: 97%;
        bottom: 50px;
        display: none;
      }
      fieldset{
        display: inline-block;
      }
    </style>
</html>