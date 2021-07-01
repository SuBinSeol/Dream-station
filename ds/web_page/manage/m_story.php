<?php  
  include "../../db.php";

  $sql = mq("SELECT class FROM information WHERE id='$_SESSION[id]'");
  while ($checking = $sql->fetch_assoc()){
    if($checking['class']=='Standard'){
      echo "<script language=javascript> alert('관리자만 이용 가능합니다.'); location.replace('../index/index.php'); </script>";
    }
    if($checking['class']=='Silver'){
        echo "<script language=javascript> alert('관리자만 이용 가능합니다.'); location.replace('../index/index.php'); </script>";
    }
    if($checking['class']=='Gold'){
      echo "<script language=javascript> alert('관리자만 이용 가능합니다.'); location.replace('../index/index.php'); </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Story Manager Page</title>
    <link rel="stylesheet" href="../../css/components.css">
    <link rel="stylesheet" href="../../css/icons.css">
    <link rel="stylesheet" href="../../css/s_responsee.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../../owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../../css/lightcase.css">
    <link rel="stylesheet" href="../../css/main1.css">
    <!-- TABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css"/> 
    <script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
    <!-- CSS 부분 -->

    <!-- JS 부분 -->
    <script type="text/javascript" src="<c:url value='../../js/jquery-1.11.2.js' />"></script>
    <script type="text/javascript" src="<c:url value='../../etc/jquery-ui-1.11.2.custom/jquery-ui.js' />"></script>
    <script type="text/javascript" src="<c:url value='../../etc/DataTables-1.10.4/media/js/jquery.dataTables.js' />"></script>
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
    </script>
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="../../css/s_template-style.css">   
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="../../js/navigation_bar.js"></script>
  </head>

  <script type="text/javascript">
    function cc(){
        if(sessionStorage.getItem("mineSession")=="-1"){
          str = `<li><a href="../login/login.html">로그인</a></li>
                <li><a href="../location/signup.html">회원가입</a></li>`;
        }else{
          str = `<li><a href=""></a>
                    <a href="#">`+sessionStorage.getItem("mineSession")+`님 환영합니다</a>
                      <ul class="main2">
                        <li><a href="../../php/login/logout.php">로그아웃</a></li>
                      </ul>
                  </li>`;
        }
        $('.loginlog').replaceWith(str);
    }
    // 상단 선택버튼 클릭시 체크된 Row의 값을 가져온다.
    function checkcolor(it) {
        tr = it.parentNode.parentNode;
        tr.style.backgroundColor = (it.checked) ? "#66BAE8" : "white";
    }
    function check(){
      var rowData = new Array();
      var tdArr = new Array();
      var checkbox = $("input[name=user_CheckBox]:checked");
      checkbox.each(function(i) {
        var tr = checkbox.parent().parent().eq(i);
        var td = tr.children();
        var no = td.eq(1).text();
        tdArr.push(no);
      });
      $.ajax({
        type : 'POST',
        url : '../../php/manage/m_story_db.php',
        cache : false,
        data : { dataArr: tdArr },
          success : function( data ){
          alert("삭제되었습니다.");
          location.reload();
          },
          error : function( jqxhr , status , error ){
                  
          }
      });
    }

</script>
  <body class="size-1280">
    <header role="banner" class="position-absolute">    
      <nav class="background-transparent background-primary-dott full-width sticky">    
        <div class="logo hide-l hide-xl hide-xxl">
           <a href="index.html" class="logo">
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
               <li><a style="color:black;" href="./m_index.php">Home</a></li>
               <li><a style="color:black;" href="./m_member.php">Member</a></li>
               <li><a style="color:black;" href="./m_story.php">Story</a></li>
            </ul>
         </div>
          
          <ul class="logo-menu">
            <a href="./m_index.php" class="logo">
              <img class="logo-white" src="../../img/dream/logo123.PNG" alt="">
              <img class="logo-dark" src="../../img/dream/logo123.PNG" alt="">
            </a>
          </ul>
          <div class="top-nav right-menu">
            <ul class="top-ul chevron">
               <li><a style="color:black;" href="./m_gallery.php">Gallery</a></li>
               <li><a style="color:black;" href="./m_equipment.php">Equipment</a></li>
               <li><a style="color:black;" href="./managerpage.php">Request</a></li>
            </ul> 
         </div>
        </div>
      </nav>
    </header>
    
    <main role="main"> 
      <section class="section background-white">      
        <div class="margin-left-60" style="text-align: center;">
        </br></br></br></br>            
        <div class="container">
            <table id="story_table" class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>날짜</th>
                        <th>조회수</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * FROM silver_story ORDER BY s_index ASC";
                    $stmt = mysqli_prepare($db, $query);
                    $exec = mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><input type="checkbox" name="user_CheckBox" onclick="checkcolor(this)"></td>
                    <td><?= $row['s_index'] ?></td>
                    <td><a href="m_story_views.php?data=<?= $row['s_index'] ?>" style="color: gray"><?= $row['s_title'] ?></a></td>
                    <td><?= $row['s_writer'] ?></td>
                    <td><?= $row['s_date'] ?></td>
                    <td><?= $row['s_view'] ?></td>
                </tr>
                <?php
                } 
                    mysqli_free_result($result); 
                    mysqli_stmt_close($stmt);
                ?>
                </tbody>
            </table>
            <a class="btn btn-default pull-left" href="./m_story_write.php" onclick="">글쓰기</a>
            <a class="btn btn-default pull-left" onclick="check()">삭제</a>
        </div>
      </section>
    </main>
    
    
    <script type="text/javascript" src="../../js/responsee.js"></script>
    <script type="text/javascript" src="../../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../../js/template-scripts.js"></script> 
  </body>
   <style>
        #holder,#holder1 { 
            border: 10px dashed #ccc; 
            width: 500px; 
            height: 290px; 
        }
        #holder.hover,#holder1.hover { 
            border: 10px dashed #333; 
        }
    </style>
</html>
