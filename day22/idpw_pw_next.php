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
    <form name="frm1" method="post" action="idpw_pw_ok.php">
    <table class="table1" border="0" cellpadding="10" cellspacing="5">
        <?
          $name=$_POST["name"];
          $tel=$_POST["tel"];
          $job=$_POST["job"];
          $id=$_POST["id"];
          $sql="select id as result from members where name='$name' and tel='$tel' and job='$job'";
          $conn=mysqli_connect("localhost","root","autoset","mydb");
          $rs=mysqli_query($conn,$sql);
          $row=mysqli_fetch_array($rs);
        
        if($row["result"]==""){
        ?>
        <tr>
          <td align="center"><h4>입력하신 정보가 일치하지 않습니다.</h4></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="뒤로가기" class="bt" onclick="location.href='idpw_pw.php'">
          </td>
        </tr>
        <?}
        else{?>
        <tr>
          <td>ID</td>
          <td><input type="text" name="id" value="<?=$row["result"]?>"></td>
        </tr>
        <tr>
          <td>변경할 비밀번호</td>
          <td><input type="password" name="new_pw"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="비밀번호 변경" class="bt" onclick="newpw()">
          </td>
        </tr>
        <? } ?>
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
  function newpw(){
    if(frm1.id.value==""){
      alert("ID를 입력하세요")
      frm1.id.focus()
      return false;
    }
    if(frm1.new_pw.value==""){
      alert("비밀번호를 입력하세요")
      frm1.new_pw.focus()
      return false;
    }
    document.frm1.submit();
  }
</script>