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
    <title>Request Manager page</title>
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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../js/navigation_bar.js"></script>
  </head>

  <script type="text/javascript">
    var n=0;
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
    function selects(seled_id){
        var snum=seled_id.substring(2);
        var sel=$("#goo"+snum+" option:selected").val();
        $('#name').val(snum);
        $('#name1').val(sel);
        // alert($("#name").val());
        n=0;
    }
    
    function dis(clicked_id){
        var num=clicked_id.substring(1);
        if($('#s'+num).css('display') == 'none'){
            $('#ss'+num).hide();
            $('#s'+num).show();
            var good_a = ["접수완료", "신청완료", "제작완료", "종료"];
            var target = document.getElementById("goo"+num);
            var d = good_a;
        
            target.options.length = 0;
        
            for (x in d) {
                var opt = document.createElement("option");
                opt.value = d[x];
                opt.innerHTML = d[x];
                target.appendChild(opt);
            }
        }else{
            $('#ss'+num).show();
            $('#s'+num).hide();
        }
        n=1;
    }
    function dis1(clicked_id){
        var nums=clicked_id.substring(2);
        location.href="test11.php?data="+nums;
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
        <div class="line text-center">
          <form action="../../php/manage/managerpage_sta.php" method="post" onsubmit="return chkSum(this);">
            <input type="text" id="name1" name="name1" value="" style="display:none">
            <input type="text" id="name" name="name" value="" style="display:none">
            </br></br></br>
            <table border="1">
            </table>
            <h3>업로드 파일 목록</h3>
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
                        $db_conn = mysqli_connect("localhost","root","1234","dream");
                        $query = "SELECT file_num, user_id, file_id, name_orig, name_save, equipment, Request, states FROM upload_file ORDER BY file_num ASC";
                        $stmt = mysqli_prepare($db_conn, $query);
                        $exec = mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= $row['file_num'] ?></td>
                    <td><?= $row['user_id'] ?></td>
                    <td><a href="download.php?file_id=<?= $row['file_id'] ?>" target="_blank"><?= $row['name_orig'] ?></a></td>
                    <td><?= $row['equipment'] ?></td>
                    <td><?= $row['Request'] ?></td>
                    <td id="ss<?php echo $i;?>"><?= $row['states'] ?></td> 
                    <td id="s<?php echo $i;?>" style="display:none">
                        <select id="goo<?php echo $i;?>">
                            <option></option>
                        </select>
                    </td>
                    <td>
                        <input id="b<?php echo $i;?>" type="submit" value="수정" onclick="dis(this.id)"/>
                        <input id="de<?php echo $i;?>" type="submit" value="삭제" onclick="dis1(this.id)"/>
                        <input id="up<?php echo $i;?>" type="submit" value="업로드" onclick="selects(this.id)"/>
                    </td>
                </tr>
                <?php
                    $i++;
                    } 
                        mysqli_free_result($result); 
                        mysqli_stmt_close($stmt);
                        mysqli_close($db_conn);
                ?>
            </table>
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
