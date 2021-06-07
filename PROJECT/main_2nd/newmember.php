<? session_start();?>
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
    <div class="member">
    <br><br>
    <form name="frm1" method="post" action="newmember_ok.php">
    <table class="table1" border="0" cellpadding="10" cellspacing="5">
      <tr><th colspan="2"><h3>회원가입 진행하기</h3></th></tr>
      <tr>
        <td>ID</td>
        <td><input type="text" name="id">
        <a href="javascript:idcheck()" class="bt">중복확인</a></td>
      </tr>
      <tr>
        <td>PASSWORD</td>
        <td><input type="password" name="pw"></td>
      </tr>
      <tr>
        <td>NAME</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>ADDRESS</td>
        <td><input type="text" name="addr"></td>
      </tr>
      <tr>
        <td>TELEPHONE NUMBER</td>
        <td><input type="text" name="tel"></td>
      </tr>
      <tr>
        <td>JOB</td>
        <td><input type="text" name="job"></td>
      </tr>
      <tr>
        <td>GRADE</td>
        <td><input type="text" name="grade"></td>
      </tr>
      <tr>
        <td>GENDER</td>
        <td><input type="radio" name="gender" value="m" checked>남성
          <input type="radio" name="gender" value="f">여성
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="button" class="bt" value="가입하기" 
          onclick="newmember()"></td>
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
  function newmember() {
    if(frm1.id.value==""){
      alert("ID를 입력하세요");
      frm1.id.focus();
      return false;
    }
    if(frm1.pw.value==""){
      alert("PASSWORD를 입력하세요");
      frm1.pw.focus();
      return false;
    }
    if(frm1.name.value==""){
      alert("NAME을 입력하세요");
      frm1.name.focus();
      return false;
    }
    if(frm1.addr.value==""){
      alert("ADDRESS를 입력하세요");
      frm1.addr.focus();
      return false;
    }
    if(frm1.tel.value==""){
      alert("TELEPHONE NUMBER를 입력하세요");
      frm1.tel.focus();
      return false;
    }
    if(frm1.job.value==""){
      alert("JOB을 입력하세요");
      frm1.job.focus();
      return false;
    }
    if(frm1.grade.value==""){
      alert("GRADE를 입력하세요");
      frm1.grade.focus();
      return false;
    }
    document.frm1.submit();
  }
  function idcheck(){
    if(frm1.id.value==""){
      alert("id를 입력하세요");
      frm1.id.focus();
      return false;
    }
    window.open("popup.php?id="+frm1.id.value,"pop01","width=600,height=200");
  }
</script>