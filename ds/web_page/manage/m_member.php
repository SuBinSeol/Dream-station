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
    <title>Member Manager Page</title>
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
              s lengthChange: false,
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
    var n=1;
    function cc(){
        if(sessionStorage.getItem("mineSession")=="-1"){
          str = `<li><a href="../login/login.html">로그인</a></li>
                <li><a href="../login/signup.html">회원가입</a></li>`;
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
            url : '../../php/manage/m_member_db.php',
            cache : false,
            data : { dataArr: tdArr },
            success : function( data ){
                alert("삭제되었습니다.");
                location.reload();
            },
            error : function( jqxhr , status , error ){
                console.log( jqxhr , status , error );
            }
        });
    }
    function selects(seled_id){
      var snum=seled_id.substring(2);
      var sel=$("#Class_type"+snum+" option:selected").val();
      var userid=$('#user'+snum).text();
      $('#id').val(userid);
      $('#select_class').val(sel);
      n=0;
    }
    function dis(clicked_id){
        var num=clicked_id.substring(1);
        if($('#select'+num).css('display') == 'none'){
            $('#class'+num).hide();
            $('#select'+num).show();
            var good_a = ["Standard", "Silver", "Gold", "Admin"];
            var target = document.getElementById("Class_type"+num);
            var d = good_a;
        
            target.options.length = 0;
        
            for (x in d) {
                var opt = document.createElement("option");
                opt.value = d[x];
                opt.innerHTML = d[x];
                target.appendChild(opt);
            }
        }else{
            $('#class'+num).show();
            $('#select'+num).hide();
        }
        n=1;
    }
    function chkSum(t){
      if(n==1){
        return false;
      }else{
        return true;
      }
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

          <!-- left menu items -->
          <!-- left menu items -->
          <div class="top-nav left-menu">
            <ul class="right top-ul chevron">
               <li><a style="color:black;" href="./m_index.php">Home</a></li>
               <li><a style="color:black;" href="./m_member.php">Member</a></li>
               <li><a style="color:black;" href="./m_story.php">Story</a></li>
            </ul>
         </div>
          
          <!-- logo -->
          <ul class="logo-menu">
            <a href="./m_index.php" class="logo">
              <!-- Logo White Version -->
              <img class="logo-white" src="../../img/dream/logo123.PNG" alt="">
              <!-- Logo Dark Version -->
              <img class="logo-dark" src="../../img/dream/logo123.PNG" alt="">
            </a>
          </ul>
          
          <!-- right menu items -->
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
    
    <!-- MAIN -->
    <main role="main"> 
      <!-- Section 1 -->
      <section class="section background-white">      
        <div class="margin-left-60" style="text-align: center;">
        </br></br></br></br>  
        <div class="container">
            <form action="../../php/manage/m_changeclass_db.php" method="post" onsubmit="return chkSum(this);">
                <input type="text" id="select_class" name="select_class" value="" style="display:none">
                <input type="text" id="id" name="id" value="" style="display:none">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>아이디</th>
                            <th>이름</th>
                            <th>등급</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=1;
                        $query = "SELECT * FROM information ORDER BY id ASC";
                        $stmt = mysqli_prepare($db, $query);
                        $exec = mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        while($row = mysqli_fetch_assoc($result)) {
                            if($row['id']=='Manager'){
                                continue;
                            }
                    ?>
                    <tr>
                        <td><input type="checkbox" name="user_CheckBox" onclick="checkcolor(this)"></td>
                        <td id="user<?php echo $i;?>"><?= $row['id'] ?></td>
                        <td><a href="Detail_member.php?data=<?= $row['id'] ?>" style="color: gray"><?= $row['name'] ?></a></td>
                        <td id="class<?php echo $i;?>"><?= $row['class'] ?></td> 
                        <td id="select<?php echo $i;?>" style="display:none">
                            <select id="Class_type<?php echo $i;?>">
                            </select>
                        </td>
                        <td>
                            <input id="b<?php echo $i;?>" type="submit" value="수정" onclick="dis(this.id)"/>
                            <input id="up<?php echo $i;?>" type="submit" value="업로드" onclick="selects(this.id)"/>
                        </td>
                    </tr>
                    <?php
                        $i++;
                    } 
                        mysqli_free_result($result); 
                        mysqli_stmt_close($stmt);
                    ?>
                    </tbody>
                </table>
                <a class="btn btn-default pull-left" onclick="check()">삭제</a>
            </form>
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