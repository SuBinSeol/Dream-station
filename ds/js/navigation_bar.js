var user_id = sessionStorage.getItem("mineSession");
var str;
function cc(){
    if(sessionStorage.getItem("mineSession")=="-1"||user_id==null){
        str = `<li><a href="../login/login.html" style="color:black;">로그인　</a></li>
            <li><a href="../login/signup.html" style="color:black;">회원가입</a></li>`;
    }
    else{
        str = `<li><a href=""></a>
                <a href="#" style="color:black;">`+sessionStorage.getItem("mineSession")+`님 환영합니다</a>
                    <ul class="main2">
                        <li><a href="../login/mypage.php">회원정보</a></li>
                        <li><a href="../login/application_list.php">신청 목록</a></li>
                        <li><a href="../../php/login/logout.php">로그아웃</a></li>
                    </ul>
                </li>`;
    }
    $('.loginlog').replaceWith(str);
}