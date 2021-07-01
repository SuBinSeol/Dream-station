<?php  
  include "..\..\db.php";

  $sql = mq("SELECT class FROM information WHERE id='$_SESSION[id]'");
  while ($checking = $sql->fetch_assoc()){
    if($checking['class']=='Standard'){
        echo "<script language=javascript> alert('Gold 등급부터 이용 가능합니다.'); location.replace('member.php'); </script>";
    }
    if($checking['class']=='Silver'){
        echo "<script language=javascript> alert('Gold 등급부터 이용 가능합니다.'); location.replace('member.php'); </script>";
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
        <header class="section background-image text-center" style="background-image:url(../../img/dream/backg9.png)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Member
          </h1>
          <p class="animated-element text-white">정보 공간</p>
          
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
         $sql11 = mq("SELECT * FROM gold_story where g_index='{$_GET['data']}'");
        // echo($_GET['data']);
        $i=0;
        //$com0_rows = mysqli_num_rows(mysqli_query($db, "SELECT * FROM comment where post_num='".$_GET['data']."'"));
         while($story = $sql11->fetch_array()){
            $int_v=(int)$story['g_view'];
            $int_v+=1;
            $sql2=mq("update gold_story set g_view='".$int_v."' where g_index='".$story['g_index']."'");
            //$sql21=mq("update post set comments='".$com0_rows."' where no='".$_GET['data']."'");
            $writer= $story['g_writer'];
            $n=$story['g_index'];
            echo "<script>test(".$story['g_index'].");</script>"
        ?>
      <a class="btn btn-default pull-right" href="member.php">목록</a></br></br>
      <table border="0" id="post_view">
            <thead>
            <tr>
                <th class='line'>제목 : <?php echo $story['g_title']; ?></th>
                <td class='line' style="text-align: right"><?php echo $story['g_date']; ?></td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <th class='line1'>작성자 : <?php echo $story['g_writer']; ?></th>
                <td class='line1' style="text-align: right">조회수 : <?php echo $story['g_view']; ?>
                <!--댓글 : <?php //echo $post['comments']; ?></td>-->
            </tr>

            <tr class='list'>
           <?php //$post=str_replace("\r\n","<br>",$story['s_content']);?>
                <th class='line1'><?php echo $story['g_content']; ?></th>
                <td class='line1'>
                <!-- <input type="text" name="aff" id="aff" value=""/> -->
                </td>
            <tr>
            </tbody>
            </table>
      </div><?php }?>
    </div>

    <div class="margin-left-60" style="">
    <div class="container">
    <form action="../../php/community/member_views_db.php" id="commentForm" name="commentForm" method="post">
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
                  <br>
                  <div>
                    <input type="submit" class="btn pull-right" value="등록"/>
                    <!-- <input id="b" type="submit" value="등록" onclick="dis(this.id)"/> -->
                    <!-- <a type="submit"class="btn pull-right">등록</a> -->
                  </div>
                </td>
              </tr>
              <?php
                $i=1;
                $db_conn = mysqli_connect("localhost","root","1234","dream");
                // echo $_GET['data'];
                $query = "SELECT c_writer, c_content, c_date FROM gold_comment where g_index=$_GET[data] ORDER BY c_index ASC";
                $stmt = mysqli_prepare($db_conn, $query);
                $exec = mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while($row = mysqli_fetch_assoc($result)) {
              ?>
              <!-- style="text-align: left" -->
              <!-- <div>
                <span><strong><?php echo $row['c_writer'] ; ?></strong></span> <span id="cCnt"></span>
              </div>
              <div>
                <span><strong><?php echo $row['c_content']; ?></strong></span> <span id="cCnt"></span>
              </div> -->
              <tr></tr>
              <tr>
                <td>
                  <div style="text-align: left"><?php echo $row['c_writer'] ; ?></div>
                  <div><?php echo $row['c_content']; ?></div>
                  <?php echo $row['c_date']; ?>
                </td>
              </tr>
              <br>
              <?php
                  $i++;
                } 
                mysqli_free_result($result); 
                mysqli_stmt_close($stmt);
                mysqli_close($db_conn);
              ?>
            </table>
          <div>
        <!-- <input type="hidden" id="b_code" name="b_code" value="${result.code }" />         -->
    </form>
</div>
<div class="container">
    <form id="commentListForm" name="commentListForm" method="post">
        <div id="commentList">
        </div>
    </form>
</div>
</div>

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

function fn_comment(code){
    //comment_add.php 자체가 없는디
    $.ajax({
        type:'POST',
        url : "<c:url value='../../php/comment_add.php'/>",
        data:$("#commentForm").serialize(),
        success : function(data){
            if(data=="success")
            {
                getCommentList();
                $("#comment").val("");
            }
        },
        error:function(request,status,error){
            //alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
       }
        
    });
}
 
/**
 * 초기 페이지 로딩시 댓글 불러오기
 */
$(function(){
    
    getCommentList();
    
});
 
/**
 * 댓글 불러오기(Ajax)
 */
function getCommentList(){
    
    $.ajax({
        type:'GET',
        url : "<c:url value='/board/commentList.do'/>",
        dataType : "json",
        data:$("#commentForm").serialize(),
        contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
        success : function(data){
            
            var html = "";
            var cCnt = data.length;
            
            if(data.length > 0){
                
                for(i=0; i<data.length; i++){
                    html += "<div>";
                    html += "<div><table class='table'><h6><strong>"+data[i].writer+"</strong></h6>";
                    html += data[i].comment + "<tr><td></td></tr>";
                    html += "</table></div>";
                    html += "</div>";
                }
                
            } else {
                
                html += "<div>";
                html += "<div><table class='table'><h6><strong>등록된 댓글이 없습니다.</strong></h6>";
                html += "</table></div>";
                html += "</div>";
                
            }
            
            $("#cCnt").html(cCnt);
            $("#commentList").html(html);
            
        },
        error:function(request,status,error){
            
       }
        
    });
}
 
</script>
      
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
      </section> -->
      <!-- <div class="background-dark">
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