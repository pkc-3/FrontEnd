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
    <form name="frm1" method="post">
    <table class="table1" border="0" cellpadding="10" cellspacing="5">
      <?  
      $name=$_POST["name"];
      $tel=$_POST["tel"];
      $job=$_POST["job"];
      $sql="select id as result from members where name='$name' and tel='$tel' and job='$job'";
      $conn=mysqli_connect("localhost","root","autoset","mydb");
      $rs=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($rs);
      ?>
        <tr>
          <th><?=$_POST["name"]?>의 ID는?</th>
        </tr>

      <?
        if($row["result"]==""){
          ?> 
          <script>alert("정보가 틀립니다.");
        history.back()</script>
        <?}
        else{
          ?>
        <tr>
          <td align="center">"<?=$row["result"]?>"입니다.</td>
        </tr>
        <? }
      ?>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="로그인하러가기" class="bt" onclick="location.href='login.php'">
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
