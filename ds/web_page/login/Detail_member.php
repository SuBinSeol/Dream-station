<?php  
  include "..\..\db.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Member page</title>
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
                    <li><a style="color:black;" href="../manage/m_index.php">Home</a></li>
                    <li><a style="color:black;" href="../manage/m_member.php">Member</a></li>
                    <li><a style="color:black;" href="../manage/m_story.php">Story</a></li>
                    </ul>
                </div>
                
                <ul class="logo-menu">
                    <a href="../manage/m_index.php" class="logo">
                    <img class="logo-white" src="../../img/dream/logo123.PNG" alt="">
                    <img class="logo-dark" src="../../img/dream/logo123.PNG" alt="">
                    </a>
                </ul>
                
                <div class="top-nav right-menu">
                    <ul class="top-ul chevron">
                    <li><a style="color:black;" href="../manage/m_gallery.php">Gallery</a></li>
                    <li><a style="color:black;" href="../manage/managerpage.php">Contact</a></li>
                    </ul> 
                </div>
                </div>
            </nav>
        </header>

        <main role="main">
            <article>    
            <div class="s-12 m-12 l-4 center">
                <form action="../../php/mypage_change_db.php" method="post" class="customform text-white">
                <?php
                    $sql = mq("select * from information where id='{$_GET['data']}'");
                    while($information = $sql->fetch_array()){
                ?>
                </br></br></br></br></br></br></br></br></br></br></br></br>
                <table>
                    <legend style="font-size: 2em; line-height:2.5em;"></legend>
                    <tr>
                        <th>아이디</th>
                        <td>
                        <input type="text" name="id" id="id" value="<?php echo $information['id'];?>" disabled/>
                        </td>
                    </tr>
                    <tr>
                        <th>비밀번호</th>
                        <td>
                        <input type="password" name="password" id="password" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <th>이름</th>
                        <td>
                        <input type="text" name="name" id="name" value="<?php echo $information['name'];?>"/>
                        </td>
                    </tr>
        
                    <tr>
                        <th>전화번호</th>
                        <td>
                        <input type="text" name="tel" id="tel" value="<?php echo $information['tel'];?>"/>
                        </td>
                    </tr>

                    <tr>
                        <th>등급</th>
                        <td>
                        <input type="text" name="class" id="class" value="<?php echo $information['class'];?>"/>
                        </td>
                    </tr>
                </table>
                <?php } ?>
                <div class="s-12" id="check"><button class="button border-radius text-white background-primary" type="submit">변경</button></div>
                </form>
            </div> 
            </article>
        </main>
        
    </body>
</html>