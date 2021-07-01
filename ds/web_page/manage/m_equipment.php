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
    <title>Equipment Manager page</title>
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
    <link rel="stylesheet" href="../../css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-ui.min.js"></script>   
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../js/navigation_bar.js"></script>
  </head>

  <script type="text/javascript">
    var n=0;
    var value="";
    $(document).ready(function(){
      // 옵션추가 버튼 클릭시
      $("#addItemBtn").click(function(){
        if ($('#item').css('display') == "none") {
          $('#item').show();
        }
        else{
          $('#item').hide();
        }
        n=1;
      });
// 버튼 클릭시 Row 값 가져오기
    $(".ava_change").click(function(){ 
         
         var str = ""
         var tdArr = new Array();   // 배열 선언
         var checkBtn = $(this);
         
         // checkBtn.parent() : checkBtn의 부모는 <td>이다.
         // checkBtn.parent().parent() : <td>의 부모이므로 <tr>이다.
         var tr = checkBtn.parent().parent();
         var td = tr.children();
         
         var no = td.eq(0).text();
         
      if($('#s'+no).css('display') == 'none'){
            $('#ss'+no).hide();
            $('#s'+no).show();
            var good_a = ["사용가능","수리중","고장"];
            var target = document.getElementById("goo"+no);
            var d = good_a;
        
            target.options.length = 0;
        
            for (x in d) {
                var opt = document.createElement("option");
                opt.value = d[x];
                opt.innerHTML = d[x];
                target.appendChild(opt);
            }
        }else{
            $('#ss'+no).show();
            $('#s'+no).hide();
        }
        n=1;
      });
    $(".revise").click(function(){ 
         var str = ""
         var tdArr = new Array();   // 배열 선언
         var checkBtn = $(this);
         var tr = checkBtn.parent().parent();
         var td = tr.children();
         var no = td.eq(0).text();

         tdArr.push(td.eq(1).text());
      tdArr.push($("#goo"+no+" option:selected").val());
      $.ajax({
            type : 'POST',
            url : '../../php/manage/m_revise_equipment_db.php',
            cache : false,
            data : { dataArr: tdArr },
            success : function( data ){
                alert("수정되었습니다.");
                location.reload();
            },
            error : function( jqxhr , status , error ){
            }
      });
      n=1;
      });
    $("#upload").click(function(){
        var tdArr = new Array();
        tdArr.push($('#ename').val());
        tdArr.push($('#amount').val());
        tdArr.push($('#ava option:selected').val());
        $.ajax({
            type : 'POST',
            url : '../../php/manage/m_equipment_add_db.php',
            cache : false,
            data : { dataArr: tdArr },
            success : function( data ){
                alert("추가되었습니다.");
                location.reload();
                // alert( "#"+data );
            },
            error : function( jqxhr , status , error ){
                console.log( jqxhr , status , error );
            }
        });
        n=1;

    });
    $(".delete").click(function(){
         var str = ""
         var tdArr = new Array();   // 배열 선언
         var checkBtn = $(this);
         var tr = checkBtn.parent().parent();
         var td = tr.children();
         var no = td.eq(0).text();

         tdArr.push(td.eq(1).text());
      $.ajax({
            type : 'POST',
            url : '../../php/manage/m_equipment_delete_db.php',
            cache : false,
            data : { dataArr: tdArr },
            success : function( data ){
                alert("삭제되었습니다.");
                location.reload();
                // alert( "#"+data );
            },
            error : function( jqxhr , status , error ){
                console.log( jqxhr , status , error );
            }
        });
        n=1;
      });
    });
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
          <form onsubmit="return chkSum(this);">
            </br></br></br>
            <table border="1">
            </table>
            <h3>장비관리</h3>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>장비명</th>
                    <th>수량</th>
                    <th>사용가능여부</th>
                    <th>변경</th>
                    <th></th>
                </tr>
                <tr id="item" style="display:none">
                  <td></td>
                  <td><input type="text" id="ename"/></td>
                  <td><input type="text" id="amount"/></td>
                  <td>
                    <select id="ava">
                      <option>사용가능</option>
                      <option>수리중</option>
                      <option>고장</option>
                    </select>
                  </td>
                  <td><input id="upload" type="submit" value="업로드"/><td>
                </tr>
                <?php
                        $i=1;
                        $db_conn = mysqli_connect("localhost","root","1234","dream");
                        $query = "SELECT * FROM equipment";
                        $stmt = mysqli_prepare($db_conn, $query);
                        $exec = mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['amount'] ?></td>
                    <td id="ss<?php echo $i;?>"><?= $row['ava'] ?></td>
                    <td id="s<?php echo $i;?>" style="display:none">
                        <select id="goo<?php echo $i;?>">
                            <option></option>
                        </select>
                    </td>
                    <td>
                        <input id="ava_change" class="ava_change" type="submit" value="사용여부변경"/>
                        <input id="delete" class="delete" type="submit" value="삭제"/>
                        <input id="revise" class="revise" type="submit" value="수정"/>
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
            <div class="col-lg-12" id="ex2_Result1" ></div> 
              <div class="col-lg-12" id="ex2_Result2" ></div> 
          </form>
          </br></br></br>
          <button id="addItemBtn">장비추가</button>
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