<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <meta charset="utf-8">
</head>
<body>
  <div id="div1">
    <div class="logo"></div>
    <div class="top">
      Welcome!!
      <div class="topmenu">
        <? if(isset($_SESSION["id"])){
        ?>
        <h4><?=$id?> 님 로그인 중입니다.</h4>
        <a href="logout.php">Logout</a>     |
        <a href="member_edit.php">Edit</a>     |
        <a href="javascript:delete1()">Delete account</a>
        <? }
        else{ ?>
        <a href="login.php">Login</a>     | 
        <a href="newmember.php">SignUp</a>     | 
        <a href="idpw.php">Search Id/Pw</a> <? } ?>
      </div>
    </div>
    <div class="left">
      <ul class="menubar">
      <li><a href="about.php">About</a></li>
      <li><a href="notice.php">Notice</a></li>
      <li><a href="board.php">Board</a></li>
      <li><a href="qna.php">Q&A</a></li>
      <li><a href="inc.php">INC</a></li>
      <li><a href="book.php">Link</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
    </ul>
    </div>
    <div class="content">
      <br><br>
    <div class="member">
    <form name="frm1" method="post" action="idpw_id_ok.php">
    <table class="table1" border="0" cellpadding="10" cellspacing="5">
        <tr>
          <th colspan="2" align="center">
            아이디 찾기
          </th>
        </tr>
        <tr>
          <td>이름</td>
          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td>전화번호</td>
          <td><input type="text" name="tel"></td>
        </tr>
        <tr>
          <td>직업</td>
          <td><input type="text" name="job"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="아이디찾기" class="bt" onclick="searchid()">
          </td>
        </tr>
    </table>
    </form>
  </div>




    </div>
    <div class="foot">
      Design & coded by jys since 2021.5.4
    </div>
</div>
</body>
</html>
<script>
  function searchid() {
    if(frm1.name.value==""){
      alert("이름을 입력하세요");
      frm1.name.focus();
      return false;
    }
    if(frm1.tel.value==""){
      alert("전화번호를 입력하세요");
      frm1.tel.focus();
      return false;
    }
    if(frm1.job.value==""){
      alert("직업을 입력하세요");
      frm1.job.focus();
      return false;
    }
    document.frm1.submit();
  }

</script>