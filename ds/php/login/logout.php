<?php
    $_POST["test"] = "-1";
?>
<meta charset="utf-8">
<script>
    sessionData="-1";
    sessionStorage.setItem('mineSession', sessionData );
    alert("로그아웃되었습니다.");
    location.href="../../web_page/index/index.php";
</script>